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
 
}