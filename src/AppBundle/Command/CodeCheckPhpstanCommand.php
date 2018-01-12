<?php

namespace AppBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Process\Process;

/**
 * Command zum Ausfuehren von phpstan zur Ueberpruefung des Codes.
 *
 * @package AppBundle\Command
 * @copyright 2016 NPO Applications GmbH
 * @author Christopher Menke <christopher.menke@npo-applications.de>
 */
class CodeCheckPhpstanCommand extends ContainerAwareCommand
{
    /**
     * Pfad zur phpstan-Config Datei.
     */
    const CONFIG_PATH = 'phpstan.neon';

    /**
     * Pfad zur phpstan.bat Datei.
     */
    const PHPSTAN_PATH = 'vendor' . DIRECTORY_SEPARATOR . 'bin' . DIRECTORY_SEPARATOR . 'phpstan.bat';

    protected function configure()
    {
        $this
            ->setName('npo:code:check-phpstan')
            ->setDescription('Ueberprueft das src und tests Verzeichnis mit phpstan zur Bug-Erkennung und Code Verbesserung.');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $buildCmd = self::PHPSTAN_PATH . ' analyse src tests --level 4 -c ' . self::CONFIG_PATH;
        $process = new Process($buildCmd);
        $process->setWorkingDirectory(realpath($this->getContainer()->get('kernel')->getRootDir() . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR));
        $process->run(function ($type, $buffer) use ($output) {
            if (Process::ERR === $type) {
                $output->writeln($buffer);
            } else {
                $output->writeln($buffer);
            }
        });
    }
}
