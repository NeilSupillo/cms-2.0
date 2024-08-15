<?php

namespace Database;

use PDO;
use PDOException;



class Connection
{

    public static function make($value)
    {

        try {
            return new PDO("mysql:host=" . $value['host'] . ";dbname=" . $value['dbname'], $value['username'], $value['password']);
        } catch (PDOException $exception) {
            echo "Connection error: " . $exception->getMessage();
        }
    }
}
