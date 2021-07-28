<?php

session_start();

require_once __DIR__ . "/vendor/autoload.php";

try{

    $frontController = new Project\Controllers\front\FrontController();

    if(isset ($_GET["action"])){

         if($_GET["action"] == "pizzas"){
            $frontController->pizzas();
        }     
        else if($_GET["action"] == "veg"){
            $isVeg = $_GET["isVeg"];
            $frontController->veg($isVeg);
        } 
        else if($_GET["action"] == "pigless"){
            $isPigless = $_GET["isPigless"];
            $frontController->pigless($isPigless);
        } 
        else if($_GET["action"] == "burger"){
            $frontController->burger();
        }  
        else if($_GET["action"] == "boissons"){
            $frontController->boissons();
        }
        else if($_GET["action"] == "alcool"){
            $isAlcool = $_GET["isAlcool"];
            $frontController->alcool($isAlcool);
        }
        else if($_GET["action"] == "contact"){
            $frontController->contact();
        } 
        else if($_GET["action"] == "toto"){
            $frontController->toto();
        } 
     
        else if($_GET["action"] == "inscription"){

            $userName = htmlspecialchars($_POST["userName"]);
            $userFirstname = htmlspecialchars($_POST["userFirstname"]);  
            $userAdress = htmlspecialchars($_POST["userAdress"]);
            $userPhone = htmlspecialchars($_POST["userPhone"]);   
            $userMail = htmlspecialchars($_POST["userMail"]);

            $user1 = htmlspecialchars($_POST["userPWD"]);  
            
            
            $userPWD = password_hash($user1, PASSWORD_DEFAULT);

            
            $frontController->inscription($userName, $userFirstname, $userAdress,$userPhone,$userMail, $userPWD);       
        }

        else if($_GET["action"] == "contactMail"){
            $lastname = htmlspecialchars($_POST["name"]);
            $mail = htmlspecialchars($_POST["mail"]);  
            $sujet = htmlspecialchars($_POST["sujet"]);
            $content = htmlspecialchars($_POST["content"]);           
            $frontController->contactMail($lastname, $mail, $sujet, $content);       
        }

        else if($_GET["action"] == 'connexion'){
            $pseudo = $_POST["pseudo"];        
            $mdp = $_POST["pwd"];
            if(!empty($pseudo) && !empty($mdp)){
                $frontController->connexion($pseudo, $mdp);
            }else{
                throw new Exception("renseignez tout les champs s.v.p");
            }          
        }  

        else if($_GET["action"] == 'connexionUser'){
            $userName = $_POST["pseudoUser"];        
            $userPWD = $_POST["pwdUser"];
            if(!empty($userName) && !empty($userPWD)){
                $frontController->connexionUser($userName, $userPWD);
            }else{
                throw new Exception("renseignez tous les champs S.V.P");
            }          
        }  

    }else{
        $frontController->accueil();
        }

        
    }
catch(Exception $e){
    die("Erreur:" . $e->getMessage());
};

  