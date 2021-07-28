<?php 

namespace Project\Models;

class UserManager extends Manager{
   

   public function newUser($userName, $userFirstname, $userAdress, $userPhone, $userMail, $userPWD,$cle){
        $bdd = $this->dbConnect();
        $req = $bdd->prepare('INSERT INTO userz(userName, userFirstname, userAdress, userPhone, userMail, userPWD,cle) VALUES (?,?,?,?,?,?,?)');
        $req->execute(array($userName, $userFirstname, $userAdress, $userPhone, $userMail, $userPWD,$cle));
        return $req;
    }

    public function recupMdp($pseudo, $mdp){
        $bdd = $this->dbConnect();
        $req = $bdd->prepare('SELECT * FROM user WHERE pseudo = ?');
        $req->execute(array($pseudo));
        return $req;
    }
 
   
}