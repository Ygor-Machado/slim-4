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

    public function create($request, $response, $args): \Psr\Http\Message\ResponseInterface
    {
        $messages = Flash::getAll();

        return $this->getTwig()->render($response, $this->setView('site/user_create'), [
            'title' => 'User Create',
            'messages' => $messages,
        ]);
    }

    public function store($request, $response, $args)
    {
        $firstName = filter_input(INPUT_POST, 'firstName', FILTER_SANITIZE_STRING);
        $lastName = filter_input(INPUT_POST, 'lastName', FILTER_SANITIZE_STRING);
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
        $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

        $this->validate->required(['firstName', 'lastName', 'email', 'password'])->exist($this->user, 'email', $email );
        $errors = $this->validate->getErrors();

        if($errors) {
            Flash::flashes($errors);
            return redirect($response, '/user/create');
        }

        $created = $this->user->create([
            'firstName' => $firstName,
            'lastName' => $lastName,
            'email' => $email,
            'password' => $password,
        ]);

        if ($created) {
            Flash::set('message', 'Cadastrado com sucesso');
            return redirect($response, '/user/create');
        }

        Flash::set('message', 'Ocorreu um erro ao cadastrar');
        return redirect($response, '/user/create');

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