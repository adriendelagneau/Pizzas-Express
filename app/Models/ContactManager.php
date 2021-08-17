<?php 

namespace Project\Models;

class ContactManager extends Manager
{
    public function mail($lastname, $mail, $sujet, $content)
    {
        $bdd = $this->dbConnect();
        $req = $bdd->prepare("INSERT INTO mails(lastname,  mail ,sujet , content) VALUE(?,?,?,?)");
        $req -> execute(array($lastname, $mail, $sujet, $content));       
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