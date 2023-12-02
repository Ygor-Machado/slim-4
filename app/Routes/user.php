<?php


use App\controllers\User;

$app->get('/user/create', User::class . ':create');
$app->post('/user/store', User::class . ':store');
$app->put('/user/update', User::class . ':update');
$app->delete('/user/delete', User::class . ':destroy');
