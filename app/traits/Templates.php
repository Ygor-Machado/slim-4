<?php

namespace App\traits;

use Slim\Views\Twig;

trait Templates
{
    public function getTwig()
    {
        try {
            return Twig::create(DIR_VIEWS);
        }catch (\Exception $e){
            echo $e->getMessage();
        }
    }

    public function setView($name)
    {
        return $name . EXT_VIEWS;
    }
}