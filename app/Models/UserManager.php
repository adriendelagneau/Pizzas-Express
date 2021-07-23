<?php 

namespace Project\Models;

class UserManager extends Manager{
    public function createUser($pseudo, $mdp){
        $bdd = $this->dbConnect();
        $user = $bdd->prepare("INSERT INTO user(pseudo,  pwd) VALUE (?,?)");
        $user->execute(array($pseudo, $mdp));
        return $user;
    }
    public function recupMdp($pseudo, $mdp){
        $bdd = $this->dbConnect();
        $req = $bdd->prepare('SELECT * FROM user WHERE pseudo = ?');
        $req->execute(array($pseudo));
        return $req;
    }
 
   
}