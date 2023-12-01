<?php

namespace App\controllers;
use App\database\models\User;

class Home extends Base
{

    public function __construct()
    {
        $this->user = new User;
    }

    public function index($request, $response)
    {

        $users = $this->user->find();

        return $this->getTwig()->render($response, $this->setView('site/home'), [
            'title' => 'Home',
            'users'  => $users,
        ]);
    }
}