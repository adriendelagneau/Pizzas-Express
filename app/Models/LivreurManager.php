<?php

namespace Project\Models;

class LivreurManager extends Manager{


    public function listLivreur()
    {
        $bdd = $this->dbConnect();
        $req = $bdd->prepare("SELECT * FROM livreur ");         
        $req->execute(array());
        return $req;
    }         
    public function deleteLivreur($id)
    {
        $bdd = $this->dbConnect();
        $req = $bdd->prepare("DELETE FROM livreur WHERE id= ?");
        $req->execute(array($id));
        return $req;
    }
    public function selectLivreur($id)
    {
        $bdd = $this->dbConnect();
        $req = $bdd->prepare("SELECT * FROM livreur WHERE id = ?");
        $req->execute(array($id));
        return $req;
    }
    public function addLivreur($livreurName, $livreurPhone, $livreurEmail)
    {
        $bdd = $this->dbConnect();
        $req =$bdd->prepare ("INSERT INTO `livreur` (`livreurName`, `livreurPhone`, `livreurEmail`) VALUES (?,?,?)");
        $req->execute([
            $livreurName, 
            $livreurPhone,
            $livreurEmail 
                    ]);  
        return $req;
    } 
    public function updateLivreur($id,$livreurName, $livreurPhone, $livreurEmail)
    {
        $bdd = $this->dbConnect();
        $req = $bdd->prepare("UPDATE livreur SET  livreurName = :livreurName,  livreurPhone = :livreurPhone, livreurEmail = :livreurEmail WHERE id = :id");
        $req->execute([
        'id' => $id,
        'livreurName' => $livreurName,
        'livreurPhone' => $livreurPhone,      
        'livreurEmail' => $livreurEmail
                ]);
        return $req;  
    }    

}