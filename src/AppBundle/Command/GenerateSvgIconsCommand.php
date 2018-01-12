<?php
namespace AppBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Finder\Finder;
use Doctrine\Common\Inflector\Inflector;
use Symfony\Component\Finder\SplFileInfo;

/**
 * Generator zum Erzeugen von SCG Icons aus SVG-Vorlagen
 *
 * @package AppBundle\Command
 * @copyright 2017 NPO Applications GmbH
 * @author Alex Schnelle <alexander.schnelle@npo-applications.de>
 */
class GenerateSvgIconsCommand extends ContainerAwareCommand
{
    /** Pfad, aus dem die Vorlagen importiert werden. */
    const IMPORT_PATH = 'var/import/icons';

    /** Pfad, in dem die generierten Icons abgelegt werden. */
    const EXPORT_PATH = 'web/css/icons';

    /** Dateiendung fuer generierte Dateien. */
    const FILE_EXTENSION = '.svg';

    const XML_BASE = '<?xml version="1.0" encoding="utf-8"?>
<svg version="1.1" id="base" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 width="24px" height="24px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve">{nodes}
</svg>';

    /**
     * @var array
     * RGB-Farben, fuer jede Farbe wird ein eigenes Icon-Set erstellt, Farbe ist als
     */
    protected $colors = [
        'default' => '#FFFFFF',
        'gruen' => '#43A047',
        'rot' => '#CB1517',
        'grau' => '#404040'
    ];

    protected function configure()
    {
        $this
            ->setName('npo:generate-svg-icons')
            ->setDescription('Generiert SVG Icons aus dem Vorlagen-Ordner.');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $importPath = $this->getContainer()->get('kernel')->getRootDir() . DIRECTORY_SEPARATOR .
                        '..' . DIRECTORY_SEPARATOR . self::IMPORT_PATH;

        $exportPath = $this->getContainer()->get('kernel')->getRootDir() . DIRECTORY_SEPARATOR .
                        '..' . DIRECTORY_SEPARATOR . self::EXPORT_PATH;

        // Suche nach SVG Vorlagen
        $finder = new Finder();
        $finder->files()->in($importPath)->name('*.svg');

        foreach ($finder as $file) {
            /** @var $file SplFileInfo */

            $iconFileName = basename($file->getRealPath());

            $svgContent = $this->getSvgContent($file);

            // Schreibe Icon ins Icon-Verzeichnis
            if (!is_dir($exportPath)) {
                mkdir($exportPath, 0777, true);
            }

            foreach ($svgContent as $prefix => $content) {
                $iconFileNamePrefix = ($prefix == 'default') ? $iconFileName : $prefix . '_' . $iconFileName;
                $filename = $exportPath . DIRECTORY_SEPARATOR . $iconFileNamePrefix;
                $output->writeln("- Generiere Icon aus Vorlage '" . $iconFileName . "', Farbe: '" . $prefix . "'");
                file_put_contents($filename, $content);
                $output->writeln("- - Icon-Datei geschrieben.");
            }
        }
    }

    protected function getSvgContent(SplFileInfo $file)
    {
        $data = $file->getContents();

        $iconColors = [];
        $nodeStr = '';
        $svgContent = [];

        $matches = [];
        preg_match_all('/<(line|rect|path|circle|polygon|polyline|ellipse)[^\/]*\/>/', $data, $matches);

        foreach ($matches[0] as $item) {
            $match = [];
            preg_match('/="(#[a-zA-Z0-9]+)/', $item, $match);
            if (isset($match[1]) && !in_array($match[1], $iconColors)) {
                $iconColors[] = $match[1];
            }
        }

        foreach ($matches[0] as $node) {
            $nodeStr .= "\n    " . $node;
        }

        $svg = str_replace('{nodes}', $nodeStr, self::XML_BASE);

        if (count($iconColors) > 1) {
            $svgContent['default'] = $svg;
        } else {
            foreach ($this->colors as $prefix => $color) {
                $svg = preg_replace('/(?:=")(#[a-zA-Z0-9]+)/', "=\"$color", $svg);
                $svgContent[$prefix] = $svg;
            }
        }

        return $svgContent;
    }
}
