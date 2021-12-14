<?php

namespace Console;

use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Console\Command;

/**
 * Author: Damilola Yakubu <damilola.yakubu@yahoo.com>
 */
class CelsiusCommand extends Command
{

    public function configure()
    {
        $this->setName('celsius')
            ->setDescription('Convert temperature from celsius to fahrenheit.')
            ->setHelp('This command allows you to Convert temperature from celsius to fahrenheit')
            ->addArgument('celsius', InputArgument::REQUIRED, 'Temperature in Celsius.');
    }

    public function execute(InputInterface $input, OutputInterface $output)
    {
        $this->celsius($input, $output);
        return 0;
    }
}
