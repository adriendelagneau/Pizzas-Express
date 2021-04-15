<?php

namespace Project\Models;

class Manager
{
    protected function dbConnect()
    {
        try {
            $bdd = new \PDO("mysql:host=localhost;dbname=b166e1518483;charset=utf8","root","");
            return $bdd;
        }catch(\PDOException $e){
            die("Erreur :" . $e->getMessage());
        }
    }
}