<?php 

namespace Project\Models;

class UserManager extends Manager{
    public function createUser($pseudo, $mdp){
        $bdd = $this->dbConnect();
        $user = $bdd->prepare("INSERT INTO user(pseudo,  pwd) VALUES (?,?)");
        $user->execute(array($pseudo, $mdp));
        return $user;
    }

  / public function inscription($userName, $userFirstname, $userAdress, $userPhone, $userMail, $userPWD){
        $bdd = $this->dbConnect();
        $userX = $bdd->prepare("INSERT INTO userz(userName, userFirstname, userAdress, userPhone, userMail, userPWD) VALUES (?,?,?,?,?,?)");
        $userX->execute(array($userName, $userFirstname, $userAdress, $userPhone, $userMail, $userPWD));
        return $userX;
    }

    public function recupMdp($pseudo, $mdp){
        $bdd = $this->dbConnect();
        $req = $bdd->prepare('SELECT * FROM user WHERE pseudo = ?');
        $req->execute(array($pseudo));
        return $req;
    }
 
   
}