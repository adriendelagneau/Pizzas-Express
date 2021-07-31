<?php 

namespace Project\Models;

class UserManager extends Manager{
   

   public function newUser($userName, $userFirstname, $userAdress, $userPhone, $userMail, $userPWD){
        $bdd = $this->dbConnect();
        $req = $bdd->prepare('INSERT INTO userz(userName, userFirstname, userAdress, userPhone, userMail, userPWD) VALUES (?,?,?,?,?,?)');
        $req->execute(array($userName, $userFirstname, $userAdress, $userPhone, $userMail, $userPWD));
        return $req;
    }

    public function recupMdpAdmin($pseudo, $mdp){
        $bdd = $this->dbConnect();
        $req = $bdd->prepare('SELECT * FROM user WHERE pseudo = ?');
        $req->execute(array($pseudo));
        return $req;
    }

    public function recupMdpUser($pseudoUser, $pwdUser){
        $bdd = $this->dbConnect();
        $req = $bdd->prepare('SELECT * FROM userz WHERE userName = ?');
        $req->execute(array($pseudoUser));
        return $req;
    }
 
    public function updateUser($userId, $userName, $userFirstname, $userAdress, $userPhone, $userMail){
        $bdd = $this->dbConnect();
        $req = $bdd->prepare("UPDATE userz SET  userId = :userId, userName = :userName, userFirstname = :userFirstname,  userAdress = :userAdress, userPhone = :userPhone, userMail = :userMail WHERE userId = :userId");//: remplace $ dans requete sql
        $req->execute([
        'userId' => $userId,
        'userName' => $userName,
        'userFirstname' => $userFirstname,
        'userAdress' => $userAdress,
        'userPhone' => $userPhone,
        'userMail' => $userMail
          
                ]);
        return $req;  
    }   
}