<?php

namespace App\database\models;

use App\traits\ConnectionTrait;
use App\traits\Create;
use App\traits\Delete;
use App\traits\Read;
use App\traits\Update;
use PDOException;

abstract Class Base
{
    use Create,Read,Update, Delete, ConnectionTrait;
}