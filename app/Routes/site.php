<?php

global $app;

use App\controllers\Home;

$app->get('/', \App\controllers\Home::class . ':index');
