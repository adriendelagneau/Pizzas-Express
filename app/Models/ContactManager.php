<?php 

namespace Project\Models;

class ContactManager extends Manager
{
    public function mail($lastname, $firstname,$adress, $mail, $sujet, $content){
        $bdd = $this->dbConnect();
        $req = $bdd->prepare("INSERT INTO mails(lastname, firstname,adress, mail ,sujet , content) VALUE(?,?,?,?,?,?)");
        $req -> execute(array($lastname, $firstname, $adress, $mail, $sujet, $content));       
        return $req;
    }
    public function getMails()
    {
        $bdd = $this->dbConnect();
        $req = $bdd->query("SELECT * FROM mails ORDER BY id DESC");
        return $req;
    }
    public function deleteEmail($id)
    {
        $bdd = $this->dbConnect();
        $req = $bdd->prepare("DELETE FROM mails WHERE id = ?");
        $req->execute(array($id));
        return $req;       
    }
}