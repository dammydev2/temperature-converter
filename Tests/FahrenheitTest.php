<?php

namespace App\Tests\Command;

use Symfony\Component\Console\Application;
use Symfony\Component\Console\Tester\CommandTester;
use Acme\DemoBundle\Command\GreetCommand;
use Console\CelsiusCommand;
use Console\FahrenheitCommand;
use PHPUnit\Framework\TestCase;

class FahrenheitTest extends Testcase
{
    public function testExecute()
    {
        $application = new Application();
        $application->add(new FahrenheitCommand());

        $command = $application->find('fahrenheit');
        $commandTester = new CommandTester($command);
        $commandTester->execute(['fahrenheit' => 77]);

        $commandTester->assertCommandIsSuccessful();

        $output = $commandTester->getDisplay();
        var_dump($output);
        $this->assertStringContainsString('77°F => 25.2°C', $output);

        $this->assertMatchesRegularExpression('/.../', $commandTester->getDisplay());
    }
}
