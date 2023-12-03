<?php

namespace App\controllers;

use App\classes\Flash;
use App\classes\Validate;
use App\database\models\User as ModelsUser;

class User extends Base
{
    private $validate;
    private $user;

    public function __construct()
    {
        $this->validate = new Validate();
        $this->user = new ModelsUser();
    }

    public function create($request, $response, $args)
    {
        $messages = Flash::getAll();

        return $this->getTwig()->render($response, $this->setView('site/user_create'), [
            'title' => 'User Create',
            'messages' => $messages,
        ]);
    }

    public function store($request, $response, $args)
    {
        $email = $_POST['email'];

        $this->validate->required(['firstName', 'lastName', 'email'])->exist($this->user, 'email', $email );
        $errors = $this->validate->getErrors();

        if($errors) {
            Flash::flashes($errors);
            return redirect($response, '/user/create');
        }

        return $response;
    }

    public function update($request, $response, $args)
    {
        var_dump('update');

        return $response;
    }

    public function destroy($request, $response, $args)
    {
        var_dump('delete');

        return $response;
    }

}