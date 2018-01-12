<?php

namespace AppBundle\Command;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Exception\CommandNotFoundException;
use Symfony\Component\Console\Exception\RuntimeException;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Question\ConfirmationQuestion;
use Symfony\Component\Finder\Finder;
use Symfony\Component\Finder\SplFileInfo;
use Symfony\Component\Yaml\Parser;
use Symfony\Component\Yaml\Yaml;

/**
 * Laedt Fixture-Dateie(n) fuer die angegebene Entity. Sucht sowohl nach Fixtures vom KhepinYamlFixturesBundle, als auch HautelookAliceBundle.
 * Es wird standardmaessig IMMER angehaengt, niemals geloescht. Bei Bedarf muss also vorher manuell truncate auf die Tabelle aufgerufen werden.
 *
 * @package AppBundle\Command
 * @copyright 2016 NPO Applications GmbH
 * @author Christopher Menke <christopher.menke@npo-applications.de>
 */
class FixturesLoadCommand extends ContainerAwareCommand
{
    const FIXTURES_KHEPIN_PATH = 'src/AppBundle/DataFixtures';
    const FIXTURES_ALICE_PATH = 'src/AppBundle/DataFixtures/ORM';
    const FIXTURES_KHEPIN_TEMP_FILE = '000_fixtures_load.yml';
    const FIXTURES_ALICE_TEMP_FILE = 'AppFixtures.php.bak';
    const FIXTURES_ALICE_APP_FIXTURES_FILE = 'AppFixtures.php';

    const FIXTURES_ALICE_APP_FIXTURES = '<?php
        namespace AppBundle\DataFixtures\ORM;
        
        use Hautelook\AliceBundle\Doctrine\DataFixtures\AbstractLoader;
        use Nelmio\Alice\Fixtures;
        
        class AppFixtures extends AbstractLoader
        {
            public function getFixtures()
            {
                return  array(
                    %FILES%
                );
            }
        }';

    protected function configure()
    {
        $this
            ->setName('npo:fixtures:load')
            ->setDescription('Importiert die Fixture-Dateie(n) fuer die uebergebene Entity/ies. Sucht sowohl nach Fixtures vom KhepinYamlFixturesBundle, als auch HautelookAliceBundle. '
                                . 'Es wird standardmaessig IMMER angehaengt, niemals geloescht. Bei Bedarf muss also vorher manuell truncate auf die Tabelle(n) aufgerufen werden.')
            ->addArgument(
                'entity',
                InputArgument::OPTIONAL,
                'Entity, deren Fixtures importiert werden sollen, z.B. AppBundle:EineEntity. Bei mehreren Entities kommasepariert (AppBundle:EineEntity,AppBundle:AndereEntity)'
            )
            ->addOption('all', null, InputOption::VALUE_NONE, 'Wenn gesetzt, werden alle Entities importiert, für die Fixtures vorliegen.');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $em = $this->getContainer()->get('doctrine')->getManager('default'); /** @var $em EntityManagerInterface */

        // Entweder alle oder mind. eine Entity muss angegeben sein
        if (!$input->getOption('all') && empty($input->getArgument('entity'))) {
            throw new RuntimeException('Please provide an entity name or use the --all Option.');
        }

        // Sicherheitsabfrage anzeigen, wenn alle Entity-Fixtures importiert werden sollen
        if ($input->getOption('all') && empty($input->getArgument('entity'))) {
            $entityNames = null;
            $helper = $this->getHelper('question');
            $question = new ConfirmationQuestion('Wirklich alle Entities importieren?', false);

            if (!$helper->ask($input, $output, $question)) {
                return;
            }
        } else {
            $entities = explode(',', $input->getArgument('entity'));
            $entityNames = array();

            foreach ($entities as $entity) {
                $entity = trim($entity);
                $metadata = $em->getMetadataFactory()->getMetadataFor($entity);
                $entityNames[] = $metadata->getName();
            }
        }

        $em->beginTransaction();

        try {
//            $this->loadKhepinFixtureFiles($output, $entityNames);
            $this->loadAliceFixtureFiles($output, $entityNames);
            $em->commit();
        } catch (\Exception $e) {
            $em->rollback();
            // Temp-Dateien loeschen, Originale wiederherstellen
            $root = $this->getContainer()->get('kernel')->getRootDir() . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR;
            if (file_exists($root . self::FIXTURES_ALICE_PATH . DIRECTORY_SEPARATOR . self::FIXTURES_ALICE_TEMP_FILE)) {
                if (file_exists($root . self::FIXTURES_ALICE_PATH . DIRECTORY_SEPARATOR . self::FIXTURES_ALICE_APP_FIXTURES_FILE)) {
                    unlink($root . self::FIXTURES_ALICE_PATH . DIRECTORY_SEPARATOR . self::FIXTURES_ALICE_APP_FIXTURES_FILE);
                    copy(
                        $root . self::FIXTURES_ALICE_PATH . DIRECTORY_SEPARATOR . self::FIXTURES_ALICE_TEMP_FILE,
                        $root . self::FIXTURES_ALICE_PATH . DIRECTORY_SEPARATOR . self::FIXTURES_ALICE_APP_FIXTURES_FILE
                    );
                }
                unlink($root . self::FIXTURES_ALICE_PATH . DIRECTORY_SEPARATOR . self::FIXTURES_ALICE_TEMP_FILE);
            }
            if (file_exists($root . self::FIXTURES_KHEPIN_PATH . DIRECTORY_SEPARATOR . self::FIXTURES_KHEPIN_TEMP_FILE)) {
                unlink($root . self::FIXTURES_KHEPIN_PATH . DIRECTORY_SEPARATOR . self::FIXTURES_KHEPIN_TEMP_FILE);
            }
            throw new \Exception('Es ist ein Fehler aufgetreten: ' . $e->getMessage());
        }
    }

    /**
     * Importiert alle Alice Fixtures Dateien, wenn $entityName = null oder nur die Fixture Dateien der in $entityName uebergebenen Entity.
     *
     * @param OutputInterface $output Output
     * @param null|string[] $entityNames Array mit Entity-Namen oder null, wenn alle importiert werden sollen
     * @return int Return-Code. Im Erfolgsfall = 0, sonst > 0; bei allen Entities der hoechste
     * @author Christopher Menke <christopher.menke@npo-applications.de>
     */
    private function loadAliceFixtureFiles(OutputInterface $output, $entityNames = null)
    {
        $path = $this->getContainer()->get('kernel')->getRootDir() . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . self::FIXTURES_ALICE_PATH;
        $returnCode = 0;

        // Wenn alle Entity-Fixtures importiert werden sollen, darf keine AppFixtures.php vorhanden sein, das Bundle nimmt dann automatisch alle
        if (empty($entityNames)) {
            // Backup Original AppFixtures.php wenn vorhanden
            if (file_exists($path . DIRECTORY_SEPARATOR . self::FIXTURES_ALICE_APP_FIXTURES_FILE)) {
                copy($path . DIRECTORY_SEPARATOR . self::FIXTURES_ALICE_APP_FIXTURES_FILE, $path . DIRECTORY_SEPARATOR . self::FIXTURES_ALICE_TEMP_FILE);
                unlink($path . DIRECTORY_SEPARATOR . self::FIXTURES_ALICE_APP_FIXTURES_FILE);
            }

            try {
                $command = $this->getApplication()->find('h:d:f:l');
            } catch (CommandNotFoundException $e) {
                return false;
            }
            $input = new ArrayInput(array('--append' => true));
            $returnCode = $command->run($input, $output);

            // Original AppFixtures.php wiederherstellen
            if (file_exists($path . DIRECTORY_SEPARATOR . self::FIXTURES_ALICE_TEMP_FILE)) {
                copy($path . DIRECTORY_SEPARATOR . self::FIXTURES_ALICE_TEMP_FILE, $path . DIRECTORY_SEPARATOR . self::FIXTURES_ALICE_APP_FIXTURES_FILE);
                unlink($path . DIRECTORY_SEPARATOR . self::FIXTURES_ALICE_TEMP_FILE);
            }
        } else {
            $yaml = new Parser();
            $finder = new Finder();
            $files = $finder->files()->in($path);

            $tempEntities = array();

            foreach ($files as $file) {
                foreach ($entityNames as $key => $entityName) {

                    /** @var $file SplFileInfo */

                    // AppFixtures.php ignorieren
                    if ($file->getBasename() == self::FIXTURES_ALICE_APP_FIXTURES_FILE) {
                        continue;
                    }

                    // Wenn $entityName gesetzt ist, duerfen auch nur die Entity-Fixtures importiert werden
                    $yamlArr = $yaml->parse(file_get_contents($file));
                    if (!empty($entityName) && !isset($yamlArr[$entityName])) {
                        continue;
                    }

                    // Backup Original AppFixtures.php wenn vorhanden
                    if (file_exists($path . DIRECTORY_SEPARATOR . self::FIXTURES_ALICE_APP_FIXTURES_FILE)) {
                        copy($path . DIRECTORY_SEPARATOR . self::FIXTURES_ALICE_APP_FIXTURES_FILE, $path . DIRECTORY_SEPARATOR . self::FIXTURES_ALICE_TEMP_FILE);
                    }

                    $tempEntities[$key] = $file->getBasename();
                }
            }

            ksort($tempEntities);

            $replaceStr = implode("',\n\t\t\t\t\t__DIR__ . '/", $tempEntities);
            $replaceStr = "__DIR__ . '/" . $replaceStr . "'";

            $newContent = str_replace('%FILES%', $replaceStr, self::FIXTURES_ALICE_APP_FIXTURES);
            file_put_contents($path . DIRECTORY_SEPARATOR . self::FIXTURES_ALICE_APP_FIXTURES_FILE, $newContent);

            try {
                $command = $this->getApplication()->find('h:d:f:l');
            } catch (CommandNotFoundException $e) {
                return false;
            }
            $input = new ArrayInput(array('--append' => true));
            $returnCodeTemp = $command->run($input, $output);
            if ($returnCodeTemp > $returnCode) {
                $returnCode = $returnCodeTemp;
            }

            // Temp Datei loeschen, Original AppFixtures.php wiederherstellen
            if (file_exists($path . DIRECTORY_SEPARATOR . self::FIXTURES_ALICE_TEMP_FILE)) {
                unlink($path . DIRECTORY_SEPARATOR . self::FIXTURES_ALICE_APP_FIXTURES_FILE);
                copy($path . DIRECTORY_SEPARATOR . self::FIXTURES_ALICE_TEMP_FILE, $path . DIRECTORY_SEPARATOR . self::FIXTURES_ALICE_APP_FIXTURES_FILE);
                unlink($path . DIRECTORY_SEPARATOR . self::FIXTURES_ALICE_TEMP_FILE);
            }
        }

        return $returnCode;
    }

    /**
     * Importiert alle Khepin Fixtures Dateien, wenn $entityName = null oder nur die Fixture Dateien der in $entityName uebergebenen Entity.
     *
     * @param OutputInterface $output Output
     * @param null $entityName Entity-Name oder null, wenn alle importiert werden sollen
     * @return int Return-Code. Im Erfolgsfall = 0, sonst > 0; bei allen Entities der hoechste
     * @author Christopher Menke <christopher.menke@npo-applications.de>
     */
    private function loadKhepinFixtureFiles(OutputInterface $output, $entityName = null)
    {
        $path = $this->getContainer()->get('kernel')->getRootDir() . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . self::FIXTURES_KHEPIN_PATH;
        $returnCode = 0;

        $yaml = new Parser();
        $finder = new Finder();
        $files = $finder->files()->in($path);
        foreach ($files as $file) {
            /** @var $file SplFileInfo */

            // Unterverzeichnisse ignorieren
            if (!empty($file->getRelativePath())) {
                continue;
            }

            $yamlArr = $yaml->parse(file_get_contents($file));

            // Wenn $entityName gesetzt ist, duerfen auch nur die Entity-Fixtures importiert werden
            if (!empty($entityName) && $yamlArr['model'] != $entityName) {
                continue;
            }

            unset($yamlArr['tags']);
            $newYaml = Yaml::dump($yamlArr);

            file_put_contents($path . DIRECTORY_SEPARATOR . self::FIXTURES_KHEPIN_TEMP_FILE, $newYaml);

            try {
                $command = $this->getApplication()->find('khepin:yamlfixtures:load');
            } catch (CommandNotFoundException $e) {
                return 1;
            }
            $input = new ArrayInput(array());
            $output->write($yamlArr['model'] . ': ');
            $returnCodeTemp = $command->run($input, $output);
            if ($returnCodeTemp > $returnCode) {
                $returnCode = $returnCodeTemp;
            }

            // Temp Dateien wieder entfernen
            unlink($path . DIRECTORY_SEPARATOR . self::FIXTURES_KHEPIN_TEMP_FILE);
        }

        return $returnCode;
    }
}
