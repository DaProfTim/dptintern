<?php
namespace AppBundle\Command;

use AppBundle\Entity\DefaultRepository;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Finder\Finder;
use Doctrine\Common\Inflector\Inflector;
use Symfony\Component\Finder\SplFileInfo;

/**
 * Generator zum Erzeugen von ExtJS Stores aus Doctrine annotierten Entities.
 *
 * @package AppBundle\Command
 * @copyright 2016 NPO Applications GmbH
 * @author Alex Schnelle <alexander.schnelle@npo-applications.de>
 */
class ExtJsStoreGenerationCommand extends ContainerAwareCommand
{
    /** Config-Parameter-Name. */
    const PATH_CONFIG_PARAMETER_NAME = 'extjs_store_path';

    /** Prefix, dass vor den Storenamen gehaengt wird (extJs-store). */
    const STORE_PREFIX = 'NpoaApp.store.fixed.';

    /** Prefix, dass vor das verwendete Model gehaengt wird (extJs-model) */
    const MODEL_PREFIX = 'NpoaApp.model.';

    /** Standard Pfad, in dem die generierten Stores abgelegt werden. */
    const DEFAULT_PATH = 'web/ext-app/app/store/fixed';

    /** Dateiendung fuer generierte Dateien. */
    const FILE_EXTENSION = '.js';

    protected function configure()
    {
        $this
            ->setName('npo:extjs:generate-stores')
            ->setDescription('Generiert ExtJs Stores aus den Doctrine annotierten Entities aller vorhandenen Bundles im src/Npo Ordner.')
            ->addArgument('path', InputArgument::OPTIONAL, 'Pfad, in dem die erzeugten Models abgelegt werden.');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $em = $this->getContainer()->get('doctrine')->getManager('default');

        /*
         * Pfad setzen, dabei gilt folgende Prioritaet (hoechste oben):
         * - Console-Parameter
         * - extjs_store_path in config.yml
         * - DEFAULT_PATH
         */
        $pathArg = $input->getArgument('path');
        if ($pathArg) {
            $path = $pathArg;
        } else {
            if ($this->getContainer()->hasParameter(self::PATH_CONFIG_PARAMETER_NAME)) {
                $path = $this->getContainer()->getParameter(self::PATH_CONFIG_PARAMETER_NAME);
            } else {
                $path = self::DEFAULT_PATH;
            }
        }
        $path = str_replace(array('\\', '/'), DIRECTORY_SEPARATOR, $path);
        if (stripos($path, DIRECTORY_SEPARATOR) !== 0) {
            $path = $this->getContainer()->get('kernel')->getRootDir()
                . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . $path;
            $path = str_replace(array('\\', '/'), DIRECTORY_SEPARATOR, $path);
        }

        // Suche nach Entity-Dateien
        $finder = new Finder();
        $finder->files()->in('src/AppBundle/Entity')
            ->contains('/@ExtFixedStore/');

        foreach ($finder as $file) {
            /** @var $file SplFileInfo */
            // Extrahiere Entity-, Paket- und Klassen-Namen
            $classEntityPackageNames = $this->extractClassEntityPackageNames($file->getRealPath());
            $className = $classEntityPackageNames['className'];
            $entityName = $classEntityPackageNames['entityName'];
            $package = $classEntityPackageNames['packageName'];

            // Ueberspringe Backup-Dateien
            if (strripos($entityName, "~") === strlen($entityName) - 1) {
                continue;
            }

            $repo = $em->getRepository($className); /** @var DefaultRepository $repo */
            $data = $repo
                ->createQueryBuilder('e')
                ->select('e')
                ->getQuery()
                ->setHint(\Doctrine\ORM\Query::HINT_INCLUDE_META_COLUMNS, true)
                ->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);

            $extJsStr = $this->getExtJsStoreString($entityName, $package, $data);

            // Schreibe Store ins Store-Verzeichnis
            $path = $this->getOutputPath($input);
            if (!is_dir($path)) {
                mkdir($path, 0777, true);
            }
            $filename = $path . DIRECTORY_SEPARATOR . $entityName . self::FILE_EXTENSION;
            $output->writeln('Generiere Store fuer Entity "' . $entityName . '"');
            file_put_contents($filename, $extJsStr);
            $output->writeln('Store geschrieben.');
        }
    }

    /**
     * Generiert und liefert den Extjs-Store als JSON-String.
     *
     * @param string $entityName Entity-Name
     * @param string $package Package Name
     * @param array $data Felder-Array
     * @return string ExtJs-Base-Model als JSON-String
     */
    private function getExtJsStoreString($entityName, $package, $data)
    {
        $classDef = "Ext.define('" . self::STORE_PREFIX . $entityName . "', {\n";
        $classDef .= "    extend: 'Ext.data.Store',\n";
        $classDef .= "    model: '" . self::MODEL_PREFIX . $package . "." . $entityName . "',\n";
        $classDef .= "    storeId: '" . lcfirst($entityName) . "Store',\n";
        $classDef .= "    alias: 'store." . lcfirst($entityName) . "',\n";
        $classDef .= "    autoLoad: true,
    proxy: {
        type: 'memory',
        reader: {
            type: 'json',
            rootProperty: ''
        }
    },\n";
        $classDef .= "    data: [";

        $rows = array();
        if (!empty($data)) {
            foreach ($data as $row) {
                $rowStr = "\n        {\n";
                $fields = array();
                foreach ($row as $key => $value) {
                    $fields[] = "            " . $key . ": " . json_encode($value);
                }
                $rowStr .= implode(",\n", $fields);
                $rowStr .= "\n        }";
                $rows[] = $rowStr;
            }
            $classDef .= implode(",", $rows);
        }

        $classDef .= "\n    ]";
        $classDef .= "\n});\n";

        return $classDef;
    }

    /**
     * Liefert den Ausgabe-Pfad, der benutzt werden soll.
     *
     * @param InputInterface $input Input
     * @return string Ausgabe-Pfad
     * @author Christopher Menke <christopher.menke@npo-applications.de>
     */
    private function getOutputPath(InputInterface $input)
    {
        /*
         * Pfad setzen, dabei gilt folgende Prioritaet (hoechste oben):
         * - Console-Parameter
         * - extjs_store_path in config.yml
         * - DEFAULT_PATH
         */
        $pathArg = $input->getArgument('path');
        if ($pathArg) {
            $path = $pathArg;
        } else {
            $path = (($this->getContainer()->hasParameter(self::PATH_CONFIG_PARAMETER_NAME)))
                ? $this->getContainer()->getParameter(self::PATH_CONFIG_PARAMETER_NAME)
                : self::DEFAULT_PATH;
        }
        $path = str_replace(array('\\', '/'), DIRECTORY_SEPARATOR, $path);
        // Relative Pfadangaben absolut machen
        if (stripos($path, DIRECTORY_SEPARATOR) !== 0) {
            $path = $this->getContainer()->get('kernel')->getRootDir() . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . $path;
            $path = str_replace(array('\\', '/'), DIRECTORY_SEPARATOR, $path);
        }

        return $path;
    }

    /**
     * Extrahiert den Klassennamen, Entitynamen und den Namen des Package aus dem uebergebenen Pfad zu einer Entity-Datei.
     *
     * @param string $entityPath Pfad zu einer Entity-Datei
     * @return string[] "className" => Klassenname, "packageName" => Packagename, "entityName" => Entityname
     * @author Christopher Menke <christopher.menke@npo-applications.de>
     */
    private function extractClassEntityPackageNames($entityPath)
    {
        $name = substr($entityPath, stripos($entityPath, DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR) + 5);
        $name = str_replace('.php', '', $name);
        $className = str_replace('/', '\\', $name);
        $entityName = substr($name, strripos($name, DIRECTORY_SEPARATOR) + 1);

        $package = substr($name, 0, strripos($name, DIRECTORY_SEPARATOR));
        $package = '.' . str_replace(DIRECTORY_SEPARATOR, '.', $package);
        // Korrigiere Gross-Kleinschreibung beim Packagename
        $package = preg_replace_callback('/\.([A-Z])([^\.]+)/', function ($matches) {
            return '.' . strtolower($matches[1]) . $matches[2];
        }, $package);
        // fuehrenden Punkt wieder entfernen
        $package = substr($package, 1);

        return array(
            'className' => $className,
            'packageName' => $package,
            'entityName' => $entityName
        );
    }
}
