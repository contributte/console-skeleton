<?php

use Contributte\Bootstrap\ExtraConfigurator;

require __DIR__ . '/../vendor/autoload.php';

$configurator = new ExtraConfigurator();

$configurator->setDebugMode(TRUE);
$configurator->enableDebugger(__DIR__ . '/../var/log');
$configurator->setTempDirectory(__DIR__ . '/../var/temp');

$configurator->addConfig(__DIR__ . '/config.neon');
$configurator->addConfig(__DIR__ . '/config.local.neon');

$container = $configurator->createContainer();

return $container;
