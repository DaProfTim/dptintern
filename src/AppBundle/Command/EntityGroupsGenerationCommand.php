<?php

namespace AppBundle\Command;

use Doctrine\Common\Annotations\AnnotationReader;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Exception\RuntimeException;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Question\ConfirmationQuestion;
use Symfony\Component\Finder\Finder;
use Symfony\Component\Finder\SplFileInfo;

/**
 * Erzeugt Groups-Annotations fuer Entities
 *
 * @package AppBundle\Command
 * @copyright 2017 NPO Applications GmbH
 * @author Alexander Schnelle <alexander.schnelle@npo-applications.de>
 */
class EntityGroupsGenerationCommand extends ContainerAwareCommand
{
    const ENTITIES_PATH = 'src/AppBundle/Entity';

    protected function configure()
    {
        $this
            ->setName('npo:entities:generate-groups')
            ->setDescription('Erzeugt Groups-Annotations fuer Entities.')
            ->addArgument(
                'entity',
                InputArgument::OPTIONAL,
                'Entity, fuer die Annotations erzeugt werden sollen, z.B. AppBundle:EineEntity. Bei mehreren Entities kommasepariert (AppBundle:EineEntity,AppBundle:AndereEntity)'
            )
            ->addOption('all', null, InputOption::VALUE_NONE, 'Wenn gesetzt, werden Gruppen fuer alle Entities erzeugt');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $em = $this->getContainer()->get('doctrine')->getManager('default'); /** @var $em EntityManagerInterface */
        $path = $this->getContainer()->get('kernel')->getRootDir() . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . self::ENTITIES_PATH;

        $finder = new Finder();
        $files = null;

        // Entweder alle oder mind. eine Entity muss angegeben sein
        if (!$input->getOption('all') && empty($input->getArgument('entity'))) {
            throw new RuntimeException('Please provide an entity name or use the --all Option.');
        }

        // Sicherheitsabfrage anzeigen, wenn alle Entity-Fixtures importiert werden sollen
        if ($input->getOption('all') && empty($input->getArgument('entity'))) {
            $entityNames = null;
            $helper = $this->getHelper('question');
            $question = new ConfirmationQuestion('Groups fuer alle Entities erzeugen?', false);

            if (!$helper->ask($input, $output, $question)) {
                return;
            }
        } else {
            $entities = explode(',', $input->getArgument('entity'));
            $entityNames = array();

            foreach ($entities as $entity) {
                $segments = explode('\\', trim(str_replace('/', '\\', $entity)));
                $finder->path($segments[0])->name($segments[1] . '.php');
            }
        }

        $files = $finder->files()->in($path);

        try {
            $this->generateGroups($output, $files);
        } catch (\Exception $e) {
            throw new \Exception('Es ist ein Fehler aufgetreten: ' . $e->getMessage());
        }
    }

    private function generateGroups(OutputInterface $output, Finder $files)
    {
        $reader = new AnnotationReader();
        $returnCode = 0;

        if (iterator_count($files) > 0) {
            foreach ($files as $file) { /** @var $file SplFileInfo */
                $content = file_get_contents($file->getRealPath());
                $names = $this->getFullEntityName($file->getRealPath());
                $refClass = new \ReflectionClass($names['fullName']);
                $fileHasAssocs = false;

                $output->writeln("Erzeuge Gruppen in Entity " . $names['entityName'] .":");

                foreach ($refClass->getProperties() as $prop) {
                    if ($prop->getDeclaringClass()->getName() != $refClass->getName()) {
                        continue;
                    }
                    $assoc = null;
                    $groups = [];
                    $withGroups = false;
                    $metaData = $reader->getPropertyAnnotations($prop);
                    if (!empty($metaData)) {
                        foreach ($metaData as $meta) {
                            if ($meta instanceof \Doctrine\ORM\Mapping\OneToOne ||
                                $meta instanceof \Doctrine\ORM\Mapping\OneToMany ||
                                $meta instanceof \Doctrine\ORM\Mapping\ManyToOne
                            ) {
                                $assoc = $meta;
                            } elseif ($meta instanceof \JMS\Serializer\Annotation\Groups) {
//                                $groups = $meta->groups;
                                $withGroups = true;
                            }
                        }

                        if ($assoc) {
                            $fileHasAssocs = true;
                            $target = substr($assoc->targetEntity, strrpos($assoc->targetEntity, '\\') + 1);
                            $groupNames = array(
                                $names['entityName'] . '_' . $target,
                                $target
                            );

//                            $groups = array_unique(array_merge($groups, $groupNames));
                            $groups = $groupNames;
                            $groupStr = '"' . implode('", "', $groups) . '"';

                            // @TODO: Regex finden, mit dem das Ueberschreiben von vorhandenen Gruppen moeglich ist, aktuell noch zu ungenau (ueberschreibt immer die erste Property mit einer Gruppe)
//                            $regexWithGroup = '/(@Groups\(\{)([^\}]*)(\}\)(?:[^\s]*\s)*\*\/\s+(?:protected|private)\s+\$' . $prop->getName() . ';)/';
                            $regexWithoutGroup = '/(\*\/\s+(?:private|protected)\s\$' . $prop->getName() . ';)/';

                            if ($withGroups) {
//                                if (preg_match($regexWithGroup, $content)) {
//                                    $content = preg_replace($regexWithGroup, "$1$groupStr$3", $content);
//                                }
                                $output->writeln("    ! Gruppen fuer " . $prop->getName() ." bereits vorhanden.");
                            } else {
                                if (preg_match($regexWithoutGroup, $content)) {
                                    $groupStr = "* @Groups({" . $groupStr . "})\n     ";
                                    $content = preg_replace($regexWithoutGroup, "$groupStr$1", $content);
                                    $output->writeln("    Gruppen fuer " . $prop->getName() ." erzeugt.");
                                }
                            }
                        }
                    }
                }

                if ($fileHasAssocs) {
                    $regexUseGroup = '/use\s+JMS\\\Serializer\\\Annotation\\\Groups\s*;/';
                    if (!preg_match($regexUseGroup, $content)) {
                        $regexNamespace = '/(namespace[^\n]*\n*)/';
                        $useStr = "\nuse JMS\\Serializer\\Annotation\\Groups;\n";
                        $content = preg_replace($regexNamespace, "$1$useStr", $content);

                        $content = str_replace("\r\n", "\n", $content);
                        $content = str_replace("\n\n\n", "\n\n", $content);
                        $content = str_replace("Groups;\n\n", "Groups;\n", $content);
                    }
                }

                if (file_put_contents($file->getRealPath(), $content)) {
                    $output->writeln("Gruppen in Entity " . $names['entityName'] ." erzeugt.");
                } else {
                    $output->writeln("!!! Fehler beim Erzeugen der Gruppen in Entity " . $names['entityName']);
                }
            }
        }
    }

    /**
     * Extrahiert den vollstaendigen Klassennamen.
     *
     * @param string $entityPath Pfad zu einer Entity-Datei
     * @return string
     * @author Alexander Schnelle <alexander.schnelle@npo-applications.de>
     */
    private function getFullEntityName($entityPath)
    {
        $name = substr($entityPath, stripos($entityPath, DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR) + 5);
        $name = str_replace('.php', '', $name);
        $name = str_replace('/', '\\', $name);
//        $name = str_replace('\\Entity\\', ':', $name);
        $entityName = substr($name, strripos($name, DIRECTORY_SEPARATOR) + 1);

        return array(
            'fullName' => $name,
            'entityName' => $entityName
        );
    }
}
