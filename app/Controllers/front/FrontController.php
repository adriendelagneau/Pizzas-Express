<?php

namespace Project\Controllers\front;

class FrontController{

   
    function accueil(){
        $slides = new \Project\Models\ImagesManager();
        $allSlides = $slides->getSlides(); 
        $aLaUne = new \Project\Models\ImagesManager();
        $allALaUne = $aLaUne->getALaUne(); 
        
        $reducs = new \Project\Models\ReducManager();
        $allReducs = $reducs->allReducs();
        require "app/Views/front/accueil.php";
    }
    function pizzas(){      
        $pizzas = new \Project\Models\ProduitsManager();
        $allPizzas = $pizzas->allPizzas();
        $aLaUne = new \Project\Models\ImagesManager();
        $allALaUne = $aLaUne->getALaUne(); 
        require "app/Views/front/pizzas.php";
    }
     function veg($isVeg){
        $pizzas = new \Project\Models\ProduitsManager();
        $allPizzas = $pizzas->pizzasVeg($isVeg);       
        $aLaUne = new \Project\Models\ImagesManager();
        $allALaUne = $aLaUne->getALaUne();
        require "app/Views/front/pizzas.php";
    }
    function pigless($isPigless){
        $pizzas = new \Project\Models\ProduitsManager();
        $allPizzas = $pizzas->pizzasPigless($isPigless);       
        $aLaUne = new \Project\Models\ImagesManager();
        $allALaUne = $aLaUne->getALaUne();
        require "app/Views/front/pizzas.php";
    }
    
    function burger(){
        $burgers = new \Project\Models\ProduitsManager();
        $allBurgers = $burgers->allBurgers();
        $aLaUne = new \Project\Models\ImagesManager();
        $allALaUne = $aLaUne->getALaUne(); 
        require "app/Views/front/burger.php";
    }
   
    function boissons(){
        $boissons = new \Project\Models\ProduitsManager();
        $allBoissons = $boissons->allBoissons();
        $aLaUne = new \Project\Models\ImagesManager();
        $allALaUne = $aLaUne->getALaUne(); 
        require "app/Views/front/boissons.php";
    }   
    function alcool($isAlcool){
        $boissons = new \Project\Models\ProduitsManager();
        $allBoissons = $boissons->alcool($isAlcool);       
        $aLaUne = new \Project\Models\ImagesManager();
        $allALaUne = $aLaUne->getALaUne();
        require "app/Views/front/boissons.php";
    }
    function contact(){
        $aLaUne = new \Project\Models\ImagesManager();
        $allALaUne = $aLaUne->getALaUne(); 
        require "app/Views/front/contact.php";
    }
    function contactMail($lastname, $firstname,$adress, $mail, $sujet, $content){
        $contactManager = new \Project\Models\ContactManager;
        
        if(filter_var($mail, FILTER_VALIDATE_EMAIL)){
            $contactUserMail = $contactManager->mail($lastname, $firstname,$adress, $mail, $sujet, $content);       
            require "app/Views/front/confirmMail.php";
        }else{
            header("Location: app/Views/front/error.php");
        }
    }
    function connexion($pseudo, $mdp){
        $userManager = new \Project\Models\UserManager();
        $connexAdmin = $userManager->recupMdp($pseudo, $mdp);
        $result = $connexAdmin->fetch();
        $isPasswordCorrect = password_verify( $mdp, $result["pwd"]);
        $_SESSION["pseudo"] = $result["pseudo"];
        $_SESSION["pwd"] = $result["pwd"];

        if ($isPasswordCorrect){
            require "app/Views/back/tableauDeBord.php";
        }
        else {
            echo "vos identifiants sont incorectes";
        }
    }  
}
/*function inscription(){
        require "app/Views/front/inscription.php";
    }
    function createUser($pseudo,$mdp){
        $userAdmin = new \Project\Models\UserManager();
        $user = $userAdmin->createUser($pseudo ,$mdp);
        header("Location: indexAdmin.php?action=tableauDeBord");
    }*/