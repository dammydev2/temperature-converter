<?php

namespace App\Tests\Command;

use Symfony\Component\Console\Application;
use Symfony\Component\Console\Tester\CommandTester;
use Acme\DemoBundle\Command\GreetCommand;
use Console\CelsiusCommand;
use PHPUnit\Framework\TestCase;

class CelsiusTest extends Testcase
{
    public function testExecute()
    {
        $application = new Application();
        $application->add(new CelsiusCommand());

        $command = $application->find('celsius');
        $commandTester = new CommandTester($command);
        $commandTester->execute(['celsius' => 25]);

        $commandTester->assertCommandIsSuccessful();

        $output = $commandTester->getDisplay();

        $this->assertStringContainsString('25°C => 77°F', $output);

        $this->assertMatchesRegularExpression('/.../', $commandTester->getDisplay());
    }
}
