<?php

session_start();

require __DIR__ . '/../vendor/autoload.php';

use Slim\Factory\AppFactory;
use Slim\Middleware\MethodOverrideMiddleware;

$app = AppFactory::create();

require __DIR__ . '/../app/helpers/config.php';
require __DIR__ . '/../app/helpers/redirect.php';
require __DIR__ . '/../app/Routes/site.php';
require __DIR__ . '/../app/Routes/user.php';

$methodOverride = new MethodOverrideMiddleware();
$app->add($methodOverride);

$app->map(['GET', 'POST', 'PUT', 'DELETE', 'PATCH'], '/{routes:.+}', function ($request, $response) {
    $response->getBody()->write('Page not found');
});

$app->run();