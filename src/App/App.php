<?php

use Slim\Factory\AppFactory;

require __DIR__ . '/../../vendor/autoload.php';

$auxContainer = new \DI\Container();
AppFactory::setContainer($auxContainer);
$app = AppFactory::create();
$container = $app->getContainer();

require __DIR__ . "/Routes.php";
require __DIR__ . "/config.php";
$app->run();