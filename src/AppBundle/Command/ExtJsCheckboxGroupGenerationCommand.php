<?php
namespace AppBundle\Command;

use Doctrine\ORM\EntityManager;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Generator zum Erzeugen von ExtJS CheckboxGroups aus Doctrine Entities.
 *
 * @package AppBundle\Command
 * @copyright 2016 NPO Applications GmbH
 * @author Christopher Menke <christopher.menke@npo-applications.de>
 */
class ExtJsCheckboxGroupGenerationCommand extends ContainerAwareCommand
{
    /** Config-Parameter-Name. */
    const PATH_CONFIG_PARAMETER_NAME = 'extjs_checkboxgroup_path';

    /** Prefix, dass vor den Dateinamen gehaengt wird. */
    const FILE_PREFIX = '';

    /** Prefix fuer den ExtJS Alias (nach "widget.") */
    const EXTJS_ALIAS_PREFIX = 'checkboxgroup';

    /** Prefix fuer die ExtJS-Klassendefinition. */
    const EXTJS_CLASS_PREFIX = 'NpoaApp.component.checkboxgroup.';

    /** Standard Pfad, in dem die generierte Datei abgelegt wird. */
    const DEFAULT_PATH = 'web/ext-app/app/component/checkboxgroup';

    /** Dateiendung fuer generierte Dateien. */
    const FILE_EXTENSION = '.js';

    /** Standard Spaltenbezeichnung, deren Wert das inputValue darstellen soll. */
    const DEFAULT_INPUTVALUE_FIELD = 'id';

    /** Standard Spaltenbezeichnung, deren Wert das boxLabel darstellen soll. */
    const DEFAULT_BOXLABEL_FIELD = 'name';

    private $inputValueField = self::DEFAULT_INPUTVALUE_FIELD;

    private $boxLabelField = self::DEFAULT_BOXLABEL_FIELD;

    protected function configure()
    {
        $this
            ->setName('npo:extjs:generate-checkboxgroup')
            ->setDescription('Generiert eine ExtJS CheckboxGroup aus den Datenbankeintraegen der uebergebenen Entity.')
            ->addArgument('entity', InputArgument::REQUIRED, 'Entity, aus deren Datenbankeintraegen eine CheckboxGroup generiert werden soll, z.B. AppBundle:Anreisemoeglichkeit')
            ->addArgument('inputvaluefield', InputArgument::OPTIONAL, 'Spaltenbezeichnung, deren Wert das inputValue darstellen soll (Default: ' . self::DEFAULT_INPUTVALUE_FIELD . ').')
            ->addArgument('boxlabelfield', InputArgument::OPTIONAL, 'Spaltenbezeichnung, deren Wert das boxLabel darstellen soll (Default: ' . self::DEFAULT_BOXLABEL_FIELD . ').')
            ->addArgument('path', InputArgument::OPTIONAL, 'Pfad, in dem die erzeugte Datei abgelegt wird.');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $em = $this->getContainer()->get('doctrine')->getManager('default'); /** @var $em EntityManager */

        // Setze Spaltenbezeichnungen der Felder, die fuer inputValue und boxLabel benutzt werden sollen
        if (!empty($input->getArgument('inputvaluefield'))) {
            $this->inputValueField = $input->getArgument('inputvaluefield');
        }
        if (!empty($input->getArgument('boxlabelfield'))) {
            $this->boxLabelField = $input->getArgument('boxlabelfield');
        }

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
            $path = $this->getContainer()->get('kernel')->getRootDir() . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . $path;
            $path = str_replace(array('\\', '/'), DIRECTORY_SEPARATOR, $path);
        }

        // Existiert die Entity?
        $entityBundledName = $input->getArgument('entity');
        $entityName = substr($entityBundledName, strripos($entityBundledName, ':') + 1);
        try {
            $className = $em->getClassMetadata($entityBundledName);
        } catch (\Exception $e) {
            throw new \Exception('Keine Entity mit Namen "' . $entityBundledName . '" gefunden."');
        }

        $data = $em->getRepository($entityBundledName)
            ->createQueryBuilder('e')
            ->select('e')
            ->getQuery()
            ->setHint(\Doctrine\ORM\Query::HINT_INCLUDE_META_COLUMNS, true)
            ->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);

        $extJsStr = $this->getExtJsCheckboxGroupString($entityName, $data);

        // Wegschreiben
        if (!is_dir($path)) {
            mkdir($path, 0777, true);
        }
        $filename = $path . DIRECTORY_SEPARATOR . self::FILE_PREFIX . $entityName . self::FILE_EXTENSION;
        $output->writeln("Generiere CheckboxGroup fuer Entity '" . $entityBundledName . "'");
        file_put_contents($filename, $extJsStr);
    }

    /**
     * Generiert und liefert die ExtJs-CheckboxGroup als JSON-String.
     *
     * @param string $entityName Entity-Name
     * @param array $data Daten
     * @return string JSON-String
     */
    private function getExtJsCheckboxGroupString($entityName, $data)
    {
        $classDef = "Ext.define('" . self::EXTJS_CLASS_PREFIX . $entityName . "', {\n";
        $classDef .= "    extend: 'Ext.form.CheckboxGroup',\n";
        $classDef .= "    alias: 'widget." . self::EXTJS_ALIAS_PREFIX . strtolower($entityName) . "',\n";
        $classDef .= "    initComponent: function() {\n";
        $classDef .= "        var me = this;\n";
        $classDef .= "        Ext.iterate(me.items, function(item) {\n";
        $classDef .= "            item.name = me.name + '[' + item.inputValue + ']';\n";
        $classDef .= "            item.itemId = me.itemId + '_' + item.inputValue;\n";
        $classDef .= "        });\n";
        $classDef .= "        me.callParent(arguments);\n";
        $classDef .= "    },\n";
        $classDef .= "    items: [";

        $rows = array();
        if (!empty($data)) {
            $i = 1;
            foreach ($data as $row) {
                $inputValueStr = (is_numeric($row[$this->inputValueField])) ? $row[$this->inputValueField] : json_encode($row[$this->inputValueField]);
                $rowStr = "\n        {\n";
                $rowStr .= "            xtype: 'checkbox',\n";
                $rowStr .= "            inputValue: " . $inputValueStr . ",\n";
                $rowStr .= "            boxLabel: " . json_encode($row[$this->boxLabelField]);
                $rowStr .= "\n        }";
                $rows[] = $rowStr;
                $i++;
            }
            $classDef .= implode(",", $rows);
        }

        $classDef .= "\n    ]";
        $classDef .= "\n});\n";

        return $classDef;
    }
}
