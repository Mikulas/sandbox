<?php

// require __DIR__ . '/shortcuts.php';
require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/config/Configurator.php';

$configurator = new App\Configurator(__DIR__ . '/../temp');

$configurator->setDebugMode(TRUE);  // debug mode MUST NOT be enabled on production server
$configurator->enableDebugger(__DIR__ . '/../log', 'mikulas+clevents@gmail.com');

$configurator->createRobotLoader()
	->register();

return $configurator->createContainer();
