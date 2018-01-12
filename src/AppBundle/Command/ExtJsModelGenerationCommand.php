<?php

namespace AppBundle\Command;

use Doctrine\ORM\Mapping\ClassMetadata;
use Doctrine\ORM\Mapping\ClassMetadataInfo;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Finder\Finder;
use Doctrine\Common\Inflector\Inflector;

/**
 * Generator zum Erzeugen von ExtJS Models aus Doctrine annotierten Entities.
 *
 * @package AppBundle\Command
 * @copyright 2015 NPO Applications GmbH
 * @author Christopher Menke <christopher.menke@npo-applications.de>
 */
class ExtJsModelGenerationCommand extends ContainerAwareCommand
{
    /** Config-Parameter-Name. */
    const PATH_CONFIG_PARAMETER_NAME = 'extjs_model_path';

    /** Prefix, dass vor den Modelnamen gehaengt wird (extJs-Model). */
    const MODEL_PREFIX = 'NpoaApp.model.';

    /** Standard Pfad, in dem die generierten Models abgelegt werden. */
    const DEFAULT_PATH = 'web/ext-app/app/model';

    /** Pfad, in dem die Entities abgelegt sind. */
    const ENTITY_PATH = 'src/AppBundle/Entity';

    /** Unter-Package-Name fuer Base-Models. */
    const BASE_MODEL_PACKAGE_NAME = 'base';

    /** Dateiendung fuer generierte Dateien. */
    const FILE_EXTENSION = '.js';

    /** Map fuer die Umwandlung von Doctrine Typen in ExtJS Typen. */
    private $dataTypesMap = array(
        'text' => 'string',
        'string' => 'string',
        'guid' => 'string',
        'clob' => 'string',
        'binary' => 'string',
        'integer' => 'integer',
        'smallint' => 'integer',
        'bigint' => 'integer',
        'float' => 'float',
        'decimal' => 'float',
        'boolean' => 'boolean',
        'date' => 'date',
        'datetimetz' => 'date',
        'datetime' => 'date',
        'time' => 'date',
        'array' => 'string',
        'simple_array' => 'string',
        'json_array' => 'string',
        'object' => 'string'
    );

    /** Datentypen, die ignoriert werden. */
    private $dataTypesIgnored = array(
        'blob'
    );

    protected function configure()
    {
        $this
            ->setName('npo:extjs:generate-models')
            ->setDescription('Generiert ExtJs Models aus den Doctrine annotierten Entities im src/AppBundle Ordner.')
            ->addArgument('path', InputArgument::OPTIONAL, 'Pfad, in dem die erzeugten Models abgelegt werden.')
            ->addOption('force', null, InputOption::VALUE_NONE, 'Wenn gesetzt, werden existierende Models auch ueberschrieben. Standardmaeßig werden nur '
                . 'Base-Models ueberschrieben, nicht davon abgeleitete.');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $em = $this->getContainer()->get('doctrine')->getManager('default');

        // Vorhandene Models ueberschreiben?
        $force = ($input->getOption('force')) ? true : false;

        // Suche nach Entity-Dateien
        $finder = new Finder();
        $finder->files()
            ->in($this->getContainer()->get('kernel')->getRootDir() . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . self::ENTITY_PATH)
            ->contains('/([@][A-Za-z0-9_-]*)[\\\\]?Entity/');

        $skippedModels = false;

        foreach ($finder as $file) {
            // Extrahiere Entity-, Paket- und Klassen-Namen
            $classEntityPackageNames = $this->extractClassEntityPackageNames($file->getRealPath());
            $className = $classEntityPackageNames['className'];
            $entityName = $classEntityPackageNames['entityName'];
            $package = $classEntityPackageNames['packageName'];

            // Ueberspringe Backup-Dateien
            if (strripos($entityName, "~") === strlen($entityName) - 1) {
                continue;
            }

            // Extrahiere Felder und deren Eigenschaften
            $metadata = $em->getClassMetadata($className); /** @var $metadata ClassMetadata */
            $fieldNames = $metadata->getFieldNames();
            $fields = array();
            $identifier = "id"; // default
            foreach ($fieldNames as $fieldName) {
                // Wird der Datentyp ignoriert, wird das Feld nicht geschrieben
                if (in_array($metadata->getTypeOfField($fieldName), $this->dataTypesIgnored)) {
                    continue;
                }
                $field = array();
                $field['name'] = $fieldName;
                $field['type'] = $this->getExtJsType($metadata->getTypeOfField($fieldName));
                $field['is_nullable'] = $metadata->isNullable($fieldName);
                $field['is_identifier'] = $metadata->isIdentifier($fieldName);
                if ($field['is_identifier']) {
                    $identifier = $field['name'];
                }
                $fields[] = $field;
            }

            // Durch Assoziationen erzeugte Felder (nur OwningSide)
            $assocFields = $metadata->getAssociationMappings();
            foreach ($assocFields as $assocField) {
                if (!$assocField['isOwningSide']) {
                    continue;
                }
                // ID-Feld der Assoziation; nur bei Nicht Many-To-Many
                if ($assocField['type'] != ClassMetadataInfo::MANY_TO_MANY) {
                    $field = array();
                    $field['name'] = $assocField['joinColumns'][0]['name'];
                    $field['type'] = $this->getExtJsType("integer");
                    $field['is_nullable'] = 1;
                    $field['is_identifier'] = 0;
                    $fields[] = $field;
                }

                // Referenz-Feld/ManyToMany Eintrag der Assoziation
                $referenceField = array();
                if ($assocField['type'] != ClassMetadataInfo::MANY_TO_MANY) {
                    $referenceField['name'] = Inflector::camelize(str_replace('_id', '', $assocField['joinColumns'][0]['name']));
                } else {
                    $referenceField['name'] = $assocField['fieldName'];
                }
                $referenceField['reference'] = self::createAssocModelName($assocField['targetEntity']);
                $referenceField['is_many_to_many'] = ($assocField['type'] == ClassMetadataInfo::MANY_TO_MANY);
                if ($referenceField['is_many_to_many']) {
                    $referenceField['join_field'] = $assocField['joinTable']['joinColumns'][0]['name'];
                    $referenceField['inverse_field'] = $assocField['joinTable']['inverseJoinColumns'][0]['name'];
                }
                $fields[] = $referenceField;
            }

            // Generiere Base-Model und Model
            $extJsBaseEntityName = $package . '.' . self::BASE_MODEL_PACKAGE_NAME . '.' . $entityName;
            $extJsEntityName = $package . '.' . $entityName;
            $extJsBaseStr = $this->getExtJsBaseModelString($extJsBaseEntityName, $identifier, $fields, $entityName, $assocFields);
            $extJsStr = $this->getExtJsModelString($extJsEntityName, $extJsBaseEntityName);

            // Schreibe Base-Model und Model
            $path = $this->getOutputPath($input);
            $skippedModel = $this->writeModels($output, $path, $package, $entityName, $extJsBaseStr, $extJsStr, $force);
            if (!$skippedModels) {
                $skippedModels = $skippedModel;
            }
        }

        if ($skippedModels) {
            $output->writeln("");
            $output->writeln('Einige Models wurden uebersprungen, da schon Models existieren (Base-Models werden immer ueberschrieben). '
                . 'Mit --force erneut starten, um auch vorhandene Models zu ueberschreiben. VORSICHT: Vorgenommene Anpassungen gehen verloren.');
        }
    }

    /**
     * Schreibt die uebergebenen Ext- und Ext-Base-Model-Strings in Dateien in den uebergebenen Pfad fuer das uebergebene Package und Entity-Name.
     *
     * @param OutputInterface $output Ausgabe auf der Konsole (Infomeldungen)
     * @param string $path Pfad der Ausgabe
     * @param string $package Package-Name
     * @param string $entityName Entity-Name
     * @param string $extJsBaseStr String fuer Ext-Base-Model
     * @param string $extJsStr String fuer Ext-Model
     * @param boolean $force wenn true, werden vorhandene Base-Model-Dateien ueberschrieben
     * @return boolean true, wenn das Model schon vorhanden war und $force = false, sodass es nicht ueberschrieben wurde
     * @author Christopher Menke <christopher.menke@npo-applications.de>
     */
    private function writeModels(OutputInterface $output, $path, $package, $entityName, $extJsBaseStr, $extJsStr, $force)
    {
        $skippedModel = false;

        // Schreibe Base-Model ins Base-Verzeichnis
        $dirname = $path . DIRECTORY_SEPARATOR . str_replace('.', DIRECTORY_SEPARATOR, $package) . DIRECTORY_SEPARATOR . self::BASE_MODEL_PACKAGE_NAME;
        if (!is_dir($dirname)) {
            mkdir($dirname, 0777, true);
        }
        $filename = $dirname . DIRECTORY_SEPARATOR . $entityName . self::FILE_EXTENSION;
        $output->writeln("Generiere Base-Model fuer Entity '" . $entityName . "'");
        file_put_contents($filename, $extJsBaseStr);

        // Schreibe Model ins Verzeichnis
        $dirname = $path . DIRECTORY_SEPARATOR . str_replace('.', DIRECTORY_SEPARATOR, $package);
        if (!is_dir($dirname)) {
            mkdir($dirname, 0777, true);
        }
        $filename = $dirname . DIRECTORY_SEPARATOR . $entityName . self::FILE_EXTENSION;
        if (!file_exists($filename) || $force) {
            $output->writeln("Generiere Model fuer Entity '" . $entityName . "'");
            file_put_contents($filename, $extJsStr);
        } else {
            $skippedModel = true;
            $output->writeln("Ueberspringe Model fuer Entity '" . $entityName . "': Existiert bereits.");
        }

        return $skippedModel;
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
         * - extjs_model_path in config.yml
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

    /**
     * Liefert den ExtJs Typ zu einem Doctrine Typen.
     *
     * @param string $type Doctrine Typ
     * @return string ExtJs Typ
     * @throws \Exception wenn unbekannter Doctrine Typ
     */
    private function getExtJsType($type)
    {
        if (isset($this->dataTypesMap[$type])) {
            return $this->dataTypesMap[$type];
        } else {
            throw new \Exception("Unbekannter Feldtyp '" . $type . "'");
        }
    }

    /**
     * Generiert einen Ext-Model-Namen fuer eine Entity.
     *
     * @param string $targetEntity
     * @return string
     */
    private function createAssocModelName($targetEntity)
    {
        $split = explode("\\", $targetEntity);
        $last = array_pop($split);
        $implodeMe = array_map('lcfirst', $split);
        array_push($implodeMe, $last);

        $assocModelName = self::MODEL_PREFIX . implode('.', $implodeMe);

        return $assocModelName;
    }

    /**
     * Gibt das letzte Element eines Model-Namens mit Punktnotation aus (z.B. AppBundle.Entity.Benutzer -> Benutzer).
     *
     * @param string $str
     * @return string
     */
    private function getLastEl($str)
    {
        $split = explode('.', $str);
        $lastEl = array_pop($split);

        return $lastEl;
    }

    /**
     * Generiert und liefert das ExtJs-Base-Model als JSON-String.
     *
     * @param string $baseEntityName Base Name der Entity
     * @param string $identifier Feldname des Identifiers
     * @param array $fields Felder-Array
     * @param string $entityName vollqualifizierter Entity-Name
     * @param array array assocFields Associations-Felder
     * @return string ExtJs-Base-Model als JSON-String
     */
    private function getExtJsBaseModelString($baseEntityName, $identifier, $fields, $entityName, $assocFields)
    {
        $classDef = "Ext.define('" . self::MODEL_PREFIX . $baseEntityName . "', {\n";
        $classDef .= "    extend: 'Ext.data.Model',\n";
        $classDef .= "    idProperty: '" . $identifier . "',\n";
        $classDef .= "    prefix: '" . lcfirst($entityName) . "',\n";

        $manyToManyStr = array();

        if (!empty($assocFields)) {
            $requires = array();
            // Requires fuer Assoziations-Models
            foreach ($assocFields as $assocField) {
                if ($assocField['isOwningSide']) {
                    $assocModelName = self::createAssocModelName($assocField['targetEntity']);

                    if (self::getLastEl($assocModelName) != $entityName) {
                        $requires[] = "'$assocModelName'";
                    }
                }
            }
            $classDef .= "    requires: [\n        ";
            $classDef .= implode(",\n        ", array_unique($requires));
            $classDef .= "\n    ],\n";
        }

        // Felder
        $classDef .= "    fields: [\n";
        $fieldStr = array();
        $prefixField = "        { name: 'prefix', type: 'string', convert: function(v, record) { return '" . lcfirst($entityName) . "'; } }";
        $fieldStr[] = $prefixField;
        foreach ($fields as $field) {
            // OneToMany wird einfach als Referenz-Feld eintragen
            if (isset($field['reference']) && !$field['is_many_to_many']) {
                $fieldStr[] = "        { name: '" . $field['name'] . "', reference: '"
                    . $field['reference'] . "' }";
                // ManyToMany muss in manyToMany-Objekt eintragen werden
            } elseif (isset($field['reference']) && $field['is_many_to_many']) {
                $manyToManyStr[] = "        " . lcfirst($entityName). $field['name'] . ": { role: '" . $field['name']. "', field: '" . $field['inverse_field'] . "', type: '"
                    . $field['reference'] . "', right: true }";
                // Normales Feld
            } else {
                switch ($field['type']) {
                    case 'date':
                        $format = ", dateFormat: 'c'";
                        break;
                    case 'integer':
                    case 'float':
                        $format = ", allowNull: true, defaultValue: null";
                        break;
                    case 'boolean':
                        $format = ", convert: function(v) { return (v ? 1 : 0); }, defaultValue: 0";
                        break;
                    default:
                        $format = "";
                        break;
                }
                $fieldStr[] = "        { name: '" . $field['name'] . "', type: '"
                    . $field['type'] . "'" . $format . " }";
            }
        }
        $classDef .= implode(",\n", $fieldStr) . "\n";
        $classDef .= "    ]";

        if (!empty($manyToManyStr)) {
            $classDef .= ",\n    manyToMany: {\n";
            $classDef .= implode(",\n", $manyToManyStr) . "\n";
            $classDef .= "    }";
        }

        $classDef .= "\n});\n";

        return $classDef;
    }

    /**
     * Generiert und liefert das ExtJs-Model als JSON-String.
     *
     * @param string $entityName vollqualifizierter Entity-Name
     * @param string $baseEntityName vollqualifizierter Base-Entity-Name
     * @return string ExtJs-Model als JSON-String
     */
    private function getExtJsModelString($entityName, $baseEntityName)
    {
        $classDef = "Ext.define('" . self::MODEL_PREFIX . $entityName . "', {\n";
        $classDef .= "    extend: '" . self::MODEL_PREFIX . $baseEntityName . "'\n";
        $classDef .= "});\n";

        return $classDef;
    }
}
