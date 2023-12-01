<?php

namespace App\database\models;

use App\traits\ConnectionTrait;
use App\traits\Create;
use App\traits\Read;
use PDOException;

abstract Class Base
{
    use Create,Read,ConnectionTrait;
}