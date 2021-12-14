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
class FahrenheitCommand extends Command
{

    public function configure()
    {
        $this->setName('fahrenheit')
            ->setDescription('Convert temperature from fahrenheit to celsius.')
            ->setHelp('This command allows you to Convert temperature from fahrenheit to celsius')
            ->addArgument('fahrenheit', InputArgument::REQUIRED, 'Temperature in fahrenheit.');
    }

    public function execute(InputInterface $input, OutputInterface $output)
    {
        $this->fahrenheit($input, $output);
        return 0;
    }
}
