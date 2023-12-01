<?php

namespace App\traits;

use App\database\Connection;

trait ConnectionTrait
{
    protected $connection;

    public function __construct()
    {
        $this->connection = Connection::connection();
    }
}