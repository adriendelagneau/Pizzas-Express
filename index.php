<?php

session_start();

require_once __DIR__.'/vendor/autoload.php';

try {
    $frontController = new Project\Controllers\front\FrontController();

    if (isset($_GET['action'])) {
        if ($_GET['action'] == 'pizzas') {
            $frontController->pizzas();
        } 
        elseif ($_GET['action'] == 'accueil') {
            $frontController->accueil();
        } 
        elseif ($_GET['action'] == 'veg') {
            $isVeg = $_GET['isVeg'];
            $frontController->veg($isVeg);
        } 
        elseif ($_GET['action'] == 'pigless') {
            $isPigless = $_GET['isPigless'];
            $frontController->pigless($isPigless);
        } 
        elseif ($_GET['action'] == 'burger') {
            $frontController->burger();
        } 
        elseif ($_GET['action'] == 'boissons') {
            $frontController->boissons();
        } 
        elseif ($_GET['action'] == 'alcool') {
            $isAlcool = $_GET['isAlcool'];
            $frontController->alcool($isAlcool);
        } 
        elseif ($_GET['action'] == 'contact') {
            $frontController->contact();
        } 
        elseif ($_GET['action'] == 'inscriptonUser') {
            $frontController->inscriptonUser();
        } 
        elseif ($_GET['action'] == 'inscription') {
            $userName = htmlspecialchars($_POST['userName']);
            $userFirstname = htmlspecialchars($_POST['userFirstname']);
            $userAdress = htmlspecialchars($_POST['userAdress']);
            $userPhone = htmlspecialchars($_POST['userPhone']);
            $userMail = htmlspecialchars($_POST['userMail']);
            $user1 = htmlspecialchars($_POST['userPWD']);
            $userPWD = password_hash($user1, PASSWORD_DEFAULT);

            $frontController->inscription($userName, $userFirstname, $userAdress, $userPhone, $userMail, $userPWD);
        } 
        elseif ($_GET['action'] == 'contactMail') {
            $lastname = htmlspecialchars($_POST['name']);
            $mail = htmlspecialchars($_POST['mail']);
            $sujet = htmlspecialchars($_POST['sujet']);
            $content = htmlspecialchars($_POST['content']);

            $frontController->contactMail($lastname, $mail, $sujet, $content);
        } 
        elseif ($_GET['action'] == 'connexionAdmin') {
            $pseudo = htmlspecialchars($_POST['pseudo']);
            $mdp = htmlspecialchars($_POST['pwd']);

            if (!empty($pseudo) && !empty($mdp)) {
                $frontController->connexionAdmin($pseudo, $mdp);
            } else {
                $frontController->erreurChampsVides();
            }
        } 
        elseif ($_GET['action'] == 'connexionUser') {
            $userName = htmlspecialchars($_POST['pseudoUser']);
            $userPWD = htmlspecialchars($_POST['pwdUser']);

            if (!empty($userName) && !empty($userPWD)) {
                $frontController->connexionUser($userName, $userPWD);
            } else {
                $frontController->erreurChampsVides();
            }
        }
    } else {
        $frontController->accueil();
    }
} catch (Exception $e) {
    die('Erreur:'.$e->getMessage());
}
