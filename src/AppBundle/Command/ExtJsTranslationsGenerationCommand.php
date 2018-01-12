<?php

namespace AppBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Yaml\Parser;

/**
 * Generator zum Erzeugen der ExtJS-Translations-Datei aus der Symfony-Translations-YAML-Datei. Benoetigt symfony/yaml.
 *
 * @package AppBundle\Command
 * @copyright 2016 NPO Applications GmbH
 * @author Christopher Menke <christopher.menke@npo-applications.de>
 */
class ExtJsTranslationsGenerationCommand extends ContainerAwareCommand
{
    /** ExtJS-App-Name (name in app.json) */
    const EXT_APP_NAME = 'NpoaApp';

    /** Standard Pfad, in dem generierte Translations-Datei abgelegt wird. */
    const DEFAULT_PATH = 'web/ext-app/app';

    /** Name der Ausgabedatei. */
    const OUTPUT_FILENAME = 'Translations.js';

    /** Pfad zur Symfony-Translations-YAML-Datei. */
    const SYMFONY_TRANSLATIONS_PATH = 'app/Resources/translations/messages.de.yml';

    protected function configure()
    {
        $this
            ->setName('npo:extjs:generate-translations')
            ->setDescription('Generiert die Translations-Datei fuer Ext aus der Symfony-Translations-YAML-Datei.')
            ->addArgument('path', InputArgument::OPTIONAL, 'Pfad, in dem die erzeugte Translations-Datei abgelegt wird.');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        /*
         * Pfad setzen, dabei gilt folgende Prioritaet (hoechste oben):
         * - Console-Parameter
         * - DEFAULT_PATH
         */
        $pathArg = $input->getArgument('path');
        if ($pathArg) {
            $path = $pathArg;
        } else {
            $path = self::DEFAULT_PATH;
        }
        // DIRECTORY_SEPARATOR des Systems verwenden zur Abtrennung von Verzeichnissen im Pfad
        $path = str_replace(array('\\', '/'), DIRECTORY_SEPARATOR, $path);
        // Bei relativen Pfadangaben vom Projekt-Verzeichnis ausgehen
        if (stripos($path, DIRECTORY_SEPARATOR) !== 0) {
            $path = $this->getContainer()->get('kernel')->getRootDir() . DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . $path;
            $path = str_replace(array('\\', '/'), DIRECTORY_SEPARATOR, $path);
        }

        // Symfony Translations-Datei parsen
        $yaml = new Parser();
        $yamlArr = $yaml->parse(file_get_contents(self::SYMFONY_TRANSLATIONS_PATH));

        // Keys von Blaettern im Array muessen UPPERCASE sein
        $extArr = self::arrayChangeKeyCaseRecursive($yamlArr);

        // Schreibe Datei
        if (!is_dir($path)) {
            mkdir($path, 0777, true);
        }
        $filename = $path . DIRECTORY_SEPARATOR . self::OUTPUT_FILENAME;
        $output->writeln("Schreibe Translations-Datei.");
        $translationsStr = $this->getTranslationsString($extArr);
        file_put_contents($filename, $translationsStr);
        $output->writeln("Translations-Datei geschrieben.");
    }

    /**
     * Generiert und liefert den Inhalt der Translations-Datei als JS-String.
     *
     * @param array $extArray Array der Translations
     * @return string Translations-Datei als JS-String
     */
    private function getTranslationsString($extArray)
    {
        $str = "/**\n";
        $str .= " * ACHTUNG! Diese Datei nicht manuell bearbeiten, sondern Aenderungen ausschliesslich in der messages.de.yml von Symfony vornehmen!\n";
        $str .= " * Anschliessend ueber php bin/console npo:extjs:generate-translations diese Datei neu generieren.\n";
        $str .= " */\n";
        $str .= "Ext.define('" . self::EXT_APP_NAME . ".Translations', {\n";
        $str .= "    singleton: true,\n";
        $str .= substr(json_encode($extArray, JSON_PRETTY_PRINT), 1);
        $str .= ");\n";

        return $str;
    }

    /**
     * Aendert die Keys eines Arrays: CASE_UPPER, wenn Element kein Array ist, CASE_LOWER wenn Element ein Array ist.
     * Basierend auf http://php.net/manual/de/function.array-change-key-case.php#114914
     *
     * @param $arr mixed Array
     * @return array Array in der oben genannten Form
     * @author Christopher Menke <christopher.menke@npo-applications.de>
     */
    private function arrayChangeKeyCaseRecursive($arr)
    {
        foreach ($arr as $key => $value) {
            if (!is_array($value)) {
                $newKey = strtoupper($key);
                $arr[$newKey] = $value;
            } else {
                $newKey = strtolower($key);
                $arr[$newKey] = self::arrayChangeKeyCaseRecursive($value);
            }
            if ($newKey != $key) {
                unset($arr[$key]);
            }
        }
        return $arr;
    }
}
