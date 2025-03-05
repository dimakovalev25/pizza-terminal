<?php

namespace App\Database;

use PDO;
use PDOException;

class Database
{
    //singleton anti_pattern
    private static ?PDO $connection = null;

    public static function connect(): PDO
    {

        if (!self::$connection) {
            try {
                self::$connection = new PDO(
                    'mysql:host=localhost;dbname=pizza;charset=utf8',
                    'pizza',
                    'pizza',
                    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
                );
            } catch (PDOException $e) {
                die("Ошибка подключения к базе данных: " . $e->getMessage());
            }
        }

        return self::$connection;
    }
}
