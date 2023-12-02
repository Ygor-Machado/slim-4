<?php

namespace App\controllers;

use App\classes\Flash;

class User extends Base
{
    public function create($request, $response, $args)
    {

        return $this->getTwig()->render($response, $this->setView('site/user_create'), [
            'title' => 'User Create',
        ]);
    }

    public function store($request, $response, $args)
    {
        var_dump('cadastrar');

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