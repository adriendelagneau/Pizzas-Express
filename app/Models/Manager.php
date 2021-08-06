<?php

namespace Project\Models;

class Manager
{
    protected function dbConnect()
    {
        try {
            $bdd = new \PDO("mysql:host=localhost;dbname=b2;charset=utf8","root","root");
            return $bdd;
        }catch(\PDOException $e){
            die("Erreur :" . $e->getMessage());
        }
    }
}

//$bdd = new \PDO("mysql:host=185.98.131.149;dbname=b166e1518483;charset=utf8","b166e1518483","Tintin56@@@");