<?php

require_once __DIR__ . '/vendor/autoload.php';

use Console\CelsiusCommand;
use Console\FahrenheitCommand;
use Symfony\Component\Console\Application;

/**
 * Author: Damilola Yakubu <damilola.yakubu@yahoo.com>
 */
$app = new Application('Console App', 'v1.0.0');
$app->add(new CelsiusCommand());
$app->add(new FahrenheitCommand());
$app->run();
