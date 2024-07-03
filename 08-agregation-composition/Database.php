<?php

class Database
{
    private $pdo;

     public function dbConnect() {
        $this->pdo = new PDO('mysql:host=locahost;dbname=library_db', 'root', '', [PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION]);

}

public function getPdo()
     {
         return $this->pdo;
     }
}