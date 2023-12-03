<?php

namespace App\traits;

use App\classes\TwigFilters;
use Slim\Views\Twig;

trait Templates
{
    public function getTwig()
    {
        try {
            $twig = Twig::create(DIR_VIEWS);
            $twig->addExtension(new TwigFilters());

            return $twig;
        }catch (\Exception $e){
            echo $e->getMessage();
        }
    }

    public function setView($name)
    {
        return $name . EXT_VIEWS;
    }
}