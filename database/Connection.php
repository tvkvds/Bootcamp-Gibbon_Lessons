<?php

use PDO;

class Connection {
    public static function make()
    {
        try {
            //database server;dbname=-hostport-username-password
            $pdo = new PDO('mysql:host=127.0.0.1;dbname=gibbon', "codegorilla", '%bK56HP$u!dwXY');
        
            return $pdo;
        } catch(PDOException $e){
            die($e->getMessage());
        }
    }
}

# $pdo = Connection::make();