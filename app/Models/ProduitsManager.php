<?php

namespace Project\Models;

class ProduitsManager extends Manager{

    /************* pizzas ****************/   

    public function allPizzas()
    {
        $bdd = $this->dbConnect();
        $req = $bdd->query("SELECT * FROM pizzas ORDER BY prixMoyenne ASC"); 
        return $req;
    }
    public function pizzasVeg($isVeg)
    {
        $bdd = $this->dbConnect();
        $req = $bdd->prepare("SELECT * FROM pizzas  WHERE isVeg = ? ORDER BY prixMoyenne ASC");
        $req->execute(array($isVeg));
        return $req;
    }
    public function pizzasPigless($isPigless)
    {
        $bdd = $this->dbConnect();
        $req = $bdd->prepare("SELECT * FROM pizzas  WHERE isPigless = ? ORDER BY prixMoyenne ASC");
        $req->execute(array($isPigless));
        return $req;
    }
    public function addPizzas($productName,$productDescription,$prixMoyenne,$prixLarge, $isVeg, $isPigless){
        $bdd = $this->dbConnect();
        $art =$bdd->prepare("INSERT INTO `pizzas` (productName,productDescription,prixMoyenne,prixLarge,isVeg,isPigless) VALUES (?,?,?,?,?,?)");
        $art->execute([
        $productName,
        $productDescription,
        $prixMoyenne,
        $prixLarge,
        $isVeg,
        $isPigless
                    ]);  
        return $art;
    }
    public function deletePizza($id)
    {
        $bdd = $this->dbConnect();
        $req = $bdd->prepare("DELETE FROM pizzas WHERE id= ?");
        $req->execute(array($id));
        return $req;
    }
    public function selectPizza($id)
    {
        $bdd = $this->dbConnect();
        $req = $bdd->prepare("SELECT * FROM pizzas WHERE id=?");
        $req->execute(array($id));
        return $req;
    }
    public function updatePizza($id,$productName,$productDescription,$prixMoyenne,$prixLarge, $isVeg, $isPigless)
    {
        $bdd = $this->dbConnect();
        $req = $bdd->prepare("UPDATE pizzas SET productName = :productName, productDescription = :productDescription, prixMoyenne = :prixMoyenne, prixLarge = :prixLarge, isVeg =:isVeg, isPigless = :isPigless WHERE id = :id");//: remplace $ dans requete sql
        $req->execute([
        'id' => $id,
        'productName' => $productName,
        'productDescription' => $productDescription,
        'prixMoyenne' => $prixMoyenne,
        'prixLarge' => $prixLarge,
        'isVeg' => $isVeg,
        'isPigless' => $isPigless
                ]);
        return $req;  
    }
    
    /************* boissons ****************/ 

     public function allBoissons()
     {
        $bdd = $this->dbConnect();
        $req = $bdd->query("SELECT * FROM boissons ORDER BY prix ASC"); 
        return $req;
    } 
    public function alcool($isAlcool)
    {
        $bdd = $this->dbConnect();
        $req = $bdd->prepare("SELECT * FROM boissons WHERE isAlcool = ? ORDER BY prix ASC");
        $req->execute(array($isAlcool));
        return $req;
    } 
    public function deleteBoisson($id)
    {
        $bdd = $this->dbConnect();
        $req = $bdd->prepare("DELETE FROM boissons WHERE id= ? ");
        $req->execute(array($id));
        return $req;
    }
    public function addBoisson($productName,$productDescription,$prix,$isAlcool)
    {
        $bdd = $this->dbConnect();
        $art =$bdd->prepare("INSERT INTO boissons (productName,productDescription,prix, isAlcool) VALUES (?,?,?,?)");
        $art->execute([
            $productName,
            $productDescription,
            $prix,
            $isAlcool
                    ]);  
        return $art;
    }
    public function selectBoisson($id)
    {
        $bdd = $this->dbConnect();
        $req = $bdd->prepare("SELECT * FROM boissons WHERE id=?");
        $req->execute(array($id));
        return $req;
    }
    public function updateBoisson($id,$productName,$productDescription,$prix,$isAlcool)
    {
        $bdd = $this->dbConnect();
        $req = $bdd->prepare("UPDATE boissons SET productName = :productName, productDescription = :productDescription, prix = :prix, isAlcool = :isAlcool  WHERE id = :id");//: remplace $ dans requete sql
        $req->execute([
        'id' => $id,
        'productName' => $productName,
        'productDescription' => $productDescription,
        'prix' => $prix,
        'isAlcool' => $isAlcool
                ]);
        return $req;  
    }
    
    /************* burgers ****************/ 
    
     public function allBurgers()
     {
        $bdd = $this->dbConnect();
        $req = $bdd->query("SELECT * FROM burger ORDER BY prix ASC"); 
        return $req;
    }
    public function addBurger($productName,$productDescription,$prix)
    {
        $bdd = $this->dbConnect();
        $art =$bdd->prepare("INSERT INTO burger (productName, productDescription, prix) VALUES (?,?,?)");
        $art->execute([
            $productName,
            $productDescription,
            $prix
                    ]);  
        return $art;
    } 
    public function deleteBurger($id)
    {
        $bdd = $this->dbConnect();
        $req = $bdd->prepare("DELETE FROM burger WHERE id= ?");
        $req->execute(array($id));
        return $req;
    }
    public function selectBurger($id)
    {
        $bdd = $this->dbConnect();
        $req = $bdd->prepare("SELECT * FROM burger WHERE id=?");
        $req->execute(array($id));
        return $req;
    }
    public function updateBurger($id,$productName,$productDescription,$prix)
    {
        $bdd = $this->dbConnect();
        $req = $bdd->prepare("UPDATE burger SET productName = :productName, productDescription = :productDescription, prix = :prix  WHERE id = :id");//: remplace $ dans requete sql
        $req->execute([
        'id' => $id,
        'productName' => $productName,
        'productDescription' => $productDescription,
        'prix' => $prix       
                ]);
        return $req;  
    }    
}