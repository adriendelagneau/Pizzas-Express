<?php

namespace Project\Models;

class OrderManager extends Manager{

/********* slides********* */
    public function getOrderList(){
        $bdd = $this->dbConnect();
        $req = $bdd->query("SELECT * FROM orderList");         
        return $req;
    }       
 
}