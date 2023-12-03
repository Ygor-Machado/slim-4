<?php

namespace App\controllers;
use App\classes\Flash;
use App\classes\Validate;
use App\database\models\User;

class Home extends Base
{

    private $user;
    private $validate;

    public function __construct()
    {
        $this->user = new User;
        $this->validate = new Validate();
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