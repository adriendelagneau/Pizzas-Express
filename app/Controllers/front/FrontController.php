<?php

namespace Project\Controllers\front;

class FrontController
{
    public function accueil()
    {
        session_destroy();
        $slides = new \Project\Models\ImagesManager();
        $allSlides = $slides->getSlides();
        $aLaUne = new \Project\Models\ImagesManager();
        $allALaUne = $aLaUne->getALaUne();
        $reducs = new \Project\Models\ReducManager();
        $allReducs = $reducs->allReducs();
        require 'app/Views/front/accueil.php';
    }

    public function erreurChampsVides()
    {
        $slides = new \Project\Models\ImagesManager();
        $allSlides = $slides->getSlides();
        $aLaUne = new \Project\Models\ImagesManager();
        $allALaUne = $aLaUne->getALaUne();
        $reducs = new \Project\Models\ReducManager();
        $allReducs = $reducs->allReducs();
        require 'app/Views/front/accueil.php';
        echo '<script>alert("Vous n avez pas rempli les champs !");</script>';
    }

    public function pizzas()
    {
        session_destroy();
        $pizzas = new \Project\Models\ProduitsManager();
        $allPizzas = $pizzas->allPizzas();
        $aLaUne = new \Project\Models\ImagesManager();
        $allALaUne = $aLaUne->getALaUne();
        require 'app/Views/front/pizzas.php';
    }

    public function veg($isVeg)
    {
        $pizzas = new \Project\Models\ProduitsManager();
        $allPizzas = $pizzas->pizzasVeg($isVeg);
        $aLaUne = new \Project\Models\ImagesManager();
        $allALaUne = $aLaUne->getALaUne();
        require 'app/Views/front/pizzas.php';
    }

    public function pigless($isPigless)
    {
        $pizzas = new \Project\Models\ProduitsManager();
        $allPizzas = $pizzas->pizzasPigless($isPigless);
        $aLaUne = new \Project\Models\ImagesManager();
        $allALaUne = $aLaUne->getALaUne();
        require 'app/Views/front/pizzas.php';
    }

    public function burger()
    {
        session_destroy();
        $burgers = new \Project\Models\ProduitsManager();
        $allBurgers = $burgers->allBurgers();
        $aLaUne = new \Project\Models\ImagesManager();
        $allALaUne = $aLaUne->getALaUne();
        require 'app/Views/front/burger.php';
    }

    public function boissons()
    {
        session_destroy();
        $boissons = new \Project\Models\ProduitsManager();
        $allBoissons = $boissons->allBoissons();
        $aLaUne = new \Project\Models\ImagesManager();
        $allALaUne = $aLaUne->getALaUne();
        require 'app/Views/front/boissons.php';
    }

    public function alcool($isAlcool)
    {
        $boissons = new \Project\Models\ProduitsManager();
        $allBoissons = $boissons->alcool($isAlcool);
        $aLaUne = new \Project\Models\ImagesManager();
        $allALaUne = $aLaUne->getALaUne();
        require 'app/Views/front/boissons.php';
    }

    /**********************  contact *****************/

    public function contact($errorContact = [])
    {
        session_destroy();
        $aLaUne = new \Project\Models\ImagesManager();
        $allALaUne = $aLaUne->getALaUne();
        require 'app/Views/front/contact.php';
    }

    public function contactMail($lastname, $mail, $sujet, $content)
    {
        $contactManager = new \Project\Models\ContactManager();
        // Removing all illegal characters from email
        $mail = filter_var($mail, FILTER_SANITIZE_EMAIL);

        $errorContact = [];

        if (!empty($mail) && filter_var($mail, FILTER_VALIDATE_EMAIL) == false) {
            $errorContact['invalid_email'] = "Votre Email n'est pas valide";
        }
        if (empty($lastname)) {
            $errorContact['required_name'] = 'Votre nom est requis';
        }
        if (empty($mail)) {
            $errorContact['required_email'] = 'Votre Email est requis';
        }
        if (empty($sujet)) {
            $errorContact['required_sujet'] = 'Un sujet  est requis';
        }
        if (empty($content)) {
            $errorContact['required_content'] = 'Un message est requis';
        }
        if (strlen($content) > 300) {
            $errorContact['too_long_message'] = 'Votre message est trop long ... 300 caractères maximum';
        }

        if (!empty($lastname) && (!empty($mail) && (!empty($sujet) && (!empty($content))))) {
            if (empty($errorContact)) {
                $contactUserMail = $contactManager->mail($lastname, $mail, $sujet, $content);
                $aLaUne = new \Project\Models\ImagesManager();
                $allALaUne = $aLaUne->getALaUne();
                require 'app/Views/front/contact.php';
                echo '<script>alert("message envoyé");</script>';
            }
        } else {
            $this->contact($errorContact);
        }
    }

    /**********************  inscription user *****************/

    public function inscriptionUser($errorInscription = [])
    {
        session_destroy();
        $aLaUne = new \Project\Models\ImagesManager();
        $allALaUne = $aLaUne->getALaUne();
        require 'app/Views/front/inscription.php';
    }

    public function inscription($userName, $userFirstname, $userAdress, $userPhone, $userMail, $userPWD)
    {
        $inscriptionUser = new \Project\Models\UserManager();
        // Removing all illegal characters from email
        $userMail = filter_var($userMail, FILTER_SANITIZE_EMAIL);

        $errorInscription = [];

        if (empty($userName)) {
            $errorInscription['required_userName'] = 'Votre nom est requis';
        }

        if (empty($userFirstname)) {
            $errorInscription['required_userFirstname'] = 'Votre prénom est requis';
        }

        if (empty($userAdress)) {
            $errorInscription['required_userAdress'] = 'Votre adresse est requise';
        }

        if (empty($userPhone)) {
            $errorInscription['required_userPhone'] = 'Votre numero de téléphone est requis';
        }

        if (!empty($userMail) && filter_var($userMail, FILTER_VALIDATE_EMAIL) == false) {
            $errorInscription['invalid_userEmail'] = 'Votre Email est incorrect';
        }

        if (empty($userMail)) {
            $errorInscription['required_userEmail'] = 'Votre Email est requis';
        }

        if (empty($userPWD)) {
            $errorInscription['required_userPWD'] = 'Votre mot de passe est requis';
        }

        if (!empty($userName) && (!empty($userFirstname) && (!empty($userAdress) && (!empty($userPhone) && (!empty($userMail) && (!empty($userPWD))))))) {
            if (empty($errorInscription)) {
                $inscription = $inscriptionUser->newUser($userName, $userFirstname, $userAdress, $userPhone, $userMail, $userPWD);
                $slides = new \Project\Models\ImagesManager();
                $allSlides = $slides->getSlides();
                $aLaUne = new \Project\Models\ImagesManager();
                $allALaUne = $aLaUne->getALaUne();
                $reducs = new \Project\Models\ReducManager();
                $allReducs = $reducs->allReducs();
                require 'app/Views/front/accueil.php';

                echo '<script>alert("Bravo, vous etes maintenant inscrit");</script>';
            }
        } else {
            $this->inscriptionUser($errorInscription);
        }
    }

    /**********************  connexion *****************/

    public function connexionAdmin($pseudo, $mdp)
    {
        $adminManager = new \Project\Models\UserManager();
        $connexAdmin = $adminManager->recupMdpAdmin($pseudo, $mdp);

        $result = $connexAdmin->fetch();

        if ($result != false) {
            $isPasswordCorrect = password_verify($mdp, $result['pwd']); /* Vérifie que le hachage fourni correspond bien au mot de passe fourni. */
            if ($isPasswordCorrect) {
                $_SESSION['pseudo'] = $pseudo;
                header('Location: indexAdmin.php?action=tableauDeBord');
            } else {
                echo '<script>alert("Vos identifiants sont incorrects");</script>';
                $slides = new \Project\Models\ImagesManager();
                $allSlides = $slides->getSlides();
                $aLaUne = new \Project\Models\ImagesManager();
                $allALaUne = $aLaUne->getALaUne();
                $reducs = new \Project\Models\ReducManager();
                $allReducs = $reducs->allReducs();
                require 'app/Views/front/accueil.php';
            }
        } else {
            echo '<script>alert("Vos identifiants sont incorrects");</script>';
            $slides = new \Project\Models\ImagesManager();
            $allSlides = $slides->getSlides();
            $aLaUne = new \Project\Models\ImagesManager();
            $allALaUne = $aLaUne->getALaUne();
            $reducs = new \Project\Models\ReducManager();
            $allReducs = $reducs->allReducs();
            require 'app/Views/front/accueil.php';
        }
    }

    public function connexionUser($pseudoUser, $pwdUser)
    {
        $userManager2 = new \Project\Models\UserManager();
        $connexAdmin2 = $userManager2->recupMdpUser($pseudoUser, $pwdUser);
        $result = $connexAdmin2->fetch();

        if ($result != false) {
            $isPasswordCorrect2 = password_verify($pwdUser, $result['userPWD']);

            if ($isPasswordCorrect2) {
                $_SESSION['userId'] = $result['userId'];
                $_SESSION['userName'] = $result['userName'];
                $_SESSION['userFirstname'] = $result['userFirstname'];
                $_SESSION['userPhone'] = $result['userPhone'];
                $_SESSION['userAdress'] = $result['userAdress'];
                $_SESSION['userMail'] = $result['userMail'];
                $_SESSION['userPWD'] = $result['userPWD'];

                require 'app/Views/back/tableauDeBordUser.php';
            } else {
                echo '<script>alert("Vos identifiants sont incorrects");</script>';
                $slides = new \Project\Models\ImagesManager();
                $allSlides = $slides->getSlides();
                $aLaUne = new \Project\Models\ImagesManager();
                $allALaUne = $aLaUne->getALaUne();
                $reducs = new \Project\Models\ReducManager();
                $allReducs = $reducs->allReducs();
                require 'app/Views/front/accueil.php';
            }
        } else {
            echo '<script>alert("Vos identifiants sont incorrects");</script>';
            $slides = new \Project\Models\ImagesManager();
            $allSlides = $slides->getSlides();
            $aLaUne = new \Project\Models\ImagesManager();
            $allALaUne = $aLaUne->getALaUne();
            $reducs = new \Project\Models\ReducManager();
            $allReducs = $reducs->allReducs();
            require 'app/Views/front/accueil.php';
        }
    }
}
