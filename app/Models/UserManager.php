<?php 

namespace Project\Models;

class UserManager extends Manager{


    public function userOrder(){
        $bdd = $this->dbConnect();

        $req = $bdd->query("SELECT * FROM userz 
        INNER JOIN orderList
        ON userz.userId = orderList.user_id");
        return $req;
        /*
        SELECT champ, COUNT(*) AS nbr_doublon
        FROM table
        GROUP BY champ
        HAVING COUNT(*) > 1
        ORDER BY nbr_doublon DESC */
    }

   public function newUser($userName, $userFirstname, $userAdress, $userPhone, $userMail, $userPWD){
        $bdd = $this->dbConnect();
        $req = $bdd->prepare('INSERT INTO userz(userName, userFirstname, userAdress, userPhone, userMail, userPWD) VALUES (?,?,?,?,?,?)');
        $req->execute(array($userName, $userFirstname, $userAdress, $userPhone, $userMail, $userPWD));
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
    public function deleteUser(){
        $bdd = $this->dbConnect();
        $req = $bdd->prepare("DELETE FROM userz WHERE userId = ?");
        $req->execute(array($_SESSION['userId']));
        return $req;
    }

    
    public function recupMdpUser($pseudoUser, $pwdUser){
        $bdd = $this->dbConnect();
        $req = $bdd->prepare('SELECT * FROM userz WHERE userName = ?');
        $req->execute(array($pseudoUser));
        return $req;
    }
    
    public function updateMdpUser($nouveauMdpCrypte){
        $bdd = $this->dbConnect();
        $req = $bdd->prepare("UPDATE userz SET  userPWD = ? WHERE userId = ?");//: remplace $ dans requete sql
        $req->execute(array($nouveauMdpCrypte, $_SESSION['userId']));
        return $req;  
    } 
    public function recupMdpAdmin($pseudo, $mdp){
        $bdd = $this->dbConnect();
        $req = $bdd->prepare('SELECT * FROM user WHERE pseudo = ?');
        $req->execute(array($pseudo));
        return $req;
    }
    
}
