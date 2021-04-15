<?php

namespace Project\Models;

class ReducManager extends Manager{

    public function allReducs(){
        $bdd = $this->dbConnect();
        $req = $bdd->query("SELECT * FROM reduc ORDER BY id DESC"); 
        return $req;
    } 
    public function addReduc($title,$periode,$condition1,$condition2,$validite){
        $bdd = $this->dbConnect();
        $art =$bdd->prepare("INSERT INTO reduc (title, periode, condition1, condition2, validite) VALUES (?,?,?,?,?)");
        $art->execute([
            $title,
            $periode,
            $condition1,
            $condition2,
            $validite
                    ]);  
        return $art;
     }
    public function deleteReduc($id){
        $bdd = $this->dbConnect();
        $req = $bdd->prepare("DELETE FROM reduc WHERE id= ?");
        $req->execute(array($id));
        return $req;
    }
    public function selectReduc($id){
        $bdd = $this->dbConnect();
        $req = $bdd->prepare("SELECT * FROM reduc WHERE id=?");
        $req->execute(array($id));
        return $req;
    }
    public function updateReduc($id ,$title, $periode, $condition1, $condition2, $validite){
        $bdd = $this->dbConnect();
        $req = $bdd->prepare("UPDATE reduc SET  title = :title, periode = :periode,  condition1 = :condition1, condition2 = :condition2, validite = :validite WHERE id = :id");//: remplace $ dans requete sql
        $req->execute([
        'id' => $id,
        'title' => $title,
        'periode' => $periode,
        'condition1' => $condition1,
        'condition2' => $condition2,
        'validite' => $validite       
                ]);
        return $req;  
    }   
}