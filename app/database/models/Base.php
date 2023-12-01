<?php

namespace App\database\models;

use App\traits\ConnectionTrait;
use App\traits\Read;
use PDOException;

abstract Class Base
{
    use  Read,ConnectionTrait;
}