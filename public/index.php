<?php

require __DIR__ . '/../vendor/autoload.php';

use Slim\Factory\AppFactory;

$app = AppFactory::create();

require __DIR__ . '/../app/helpers/config.php';
require __DIR__ . '/../app/Routes/site.php';

$app->run();