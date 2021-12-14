<?php

namespace Console;

use Symfony\Component\Console\Command\Command as SymfonyCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Author: Damilola Yakubu <damilola.yakubu@yahoo.com>
 */
class Command extends SymfonyCommand
{

    protected $celcius;
    protected $fahrenheit;
    const CELSIUS_MULTIPLY = 1.8;
    const FAHRENHEIT_MULTIPLY = 0.56;
    const CONSTANT = 32;

    public function __construct()
    {
        parent::__construct();
    }

    protected function celsius(InputInterface $input, OutputInterface $output)
    {

        $this->celcius = $input->getArgument('celsius');
        $fahrenheit = $this->convertToFahrenheit($this->celcius);

        $output->writeln([
            "{$input->getArgument('celsius')}°C => {$fahrenheit}°F",
            ''
        ]);
    }

    private function convertToFahrenheit(int $celcius)
    {
        return (($celcius * self::CELSIUS_MULTIPLY) + self::CONSTANT);
    }

    protected function fahrenheit(InputInterface $input, OutputInterface $output)
    {

        $this->fahrenheit = $input->getArgument('fahrenheit');
        $celsius = $this->convertToCelsius($this->fahrenheit);

        $output->writeln([
            "{$input->getArgument('fahrenheit')}°F => {$celsius}°C",
            ''
        ]);
    }

    private function convertToCelsius(int $fahrenheit)
    {
        return (($fahrenheit - self::CONSTANT) * self::FAHRENHEIT_MULTIPLY);
    }
}
