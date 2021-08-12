<?php

namespace Project\Models;

class OrderManager extends Manager{

/********* slides********* */
    public function getOrderList($id){
        $bdd = $this->dbConnect();
        $req = $bdd->prepare("SELECT * FROM orderList WHERE user_id = ?");         
        $req->execute(array($id));
        return $req;
    }       
    public function adminOrder(){
        $bdd = $this->dbConnect();
        $req = $bdd->query("SELECT * FROM orderList 
        INNER JOIN user
        ON orderList.user_id = user.userId
        INNER JOIN livreur
        ON orderList.livreur_id = livreur.id
        ORDER BY order_date DESC");
        return $req;
    }
}