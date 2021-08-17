<?php 

namespace Project\Models;

class UserManager extends Manager{


   public function newUser($userName, $userFirstname, $userAdress, $userPhone, $userMail, $userPWD)
   {
        $bdd = $this->dbConnect();
        $req = $bdd->prepare('INSERT INTO user(userName, userFirstname, userAdress, userPhone, userMail, userPWD) VALUES (?,?,?,?,?,?)');
        $req->execute(array($userName, $userFirstname, $userAdress, $userPhone, $userMail, $userPWD));
        return $req;
    }
    public function updateUser($userId, $userName, $userFirstname, $userAdress, $userPhone, $userMail)
    {
        $bdd = $this->dbConnect();
        $req = $bdd->prepare("UPDATE user SET  userId = :userId, userName = :userName, userFirstname = :userFirstname,  userAdress = :userAdress, userPhone = :userPhone, userMail = :userMail WHERE userId = :userId");//: remplace $ dans requete sql
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
    public function deleteUser()
    {
        $bdd = $this->dbConnect();
        $req = $bdd->prepare("DELETE FROM user WHERE userId = ?");
        $req->execute(array($_SESSION['userId']));
        return $req;
    }
    public function recupMdpUser($pseudoUser, $pwdUser)
    {
        $bdd = $this->dbConnect();
        $req = $bdd->prepare('SELECT * FROM user WHERE userName = ?');
        $req->execute(array($pseudoUser));
        return $req;
    }
    public function updateMdpUser($nouveauMdpCrypte)
    {
        $bdd = $this->dbConnect();
        $req = $bdd->prepare("UPDATE user SET  userPWD = ? WHERE userId = ?");//: remplace $ dans requete sql
        $req->execute(array($nouveauMdpCrypte, $_SESSION['userId']));
        return $req;  
    } 
    public function recupMdpAdmin($pseudo, $mdp)
    {
        $bdd = $this->dbConnect();
        $req = $bdd->prepare('SELECT * FROM adminInfo WHERE pseudo = ?');
        $req->execute(array($pseudo));
        return $req;
    }
    public function deleteHistory($id)
    {
        $bdd = $this->dbConnect();
        $req = $bdd->prepare("DELETE  FROM orderList WHERE user_id = ?");
        $req->execute(array($id));
        return $req;
    }
    
}
