<?php

namespace Project\Models;

class ImagesManager extends Manager{

/********* slides **********/

    public function getSlides()
    {
        $bdd = $this->dbConnect();
        $req = $bdd->query("SELECT * FROM slider");         
        return $req;
    }       
    public function uploadSlide( $title, $imgAdress)
    {
        $bdd = $this->dbConnect();
        $img = $bdd->prepare("INSERT INTO slider (title, imgAdress) VALUES (?,?)");
        $img->execute([
                        $title,
                        $imgAdress
                    ]);
        return $img;
    }    
    public function deleteSlide($id)
    {
        $bdd = $this->dbconnect();
        $req = $bdd->prepare("DELETE  FROM slider WHERE id= ?"); 
        $req->execute(array($id));
        return $req;
    }
    
    /********* A la une **********/
    
    public function getALaUne()
    {
        $bdd = $this->dbConnect();
        $req = $bdd->query("SELECT * FROM alaune");         
        return $req;
    }       
    public function uploadALaUne( $title, $imgAdress)
    {
        $bdd = $this->dbConnect();
        $img = $bdd->prepare("INSERT INTO alaune (title, imgAdress) VALUES (?,?)");
        $img->execute([
                        $title,
                        $imgAdress
                    ]);
        return $img;
    }    
    public function deleteALaUne($id)
    {
        $bdd = $this->dbconnect();
        $req = $bdd->prepare("DELETE  FROM alaune WHERE id= ?"); 
        $req->execute(array($id));
        return $req;
    } 
}