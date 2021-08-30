<?php

namespace Project\Controllers\Back;

class BackController
{
    public function tableauDeBord()
    {
        require 'app/Views/back/tableauDeBordAdmin.php';
    }

    public function tdbProducts()
    {
        require 'app/Views/back/tdbProducts.php';
    }

    public function tableauDeBordUser()
    {
        require 'app/Views/back/tableauDeBordUser.php';
    }

    public function infosUser()
    {
        require 'app/Views/back/infosUser.php';
    }

    public function changeMdp()
    {
        require 'app/Views/back/changePwd.php';
    }

    public function orderList()
    {
        require 'app/Views/back/orderList.php';
    }

    public function desinscription()
    {
        require 'app/Views/back/desinscription.php';
    }

    public function deconnexion()
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

    /*************************** pizzas ********************************/

    public function listPizzas()
    {
        $pizzas = new \Project\Models\ProduitsManager();
        $allPizzas = $pizzas->allPizzas();
        require 'app/Views/back/listPizzas.php';
    }

    public function addPizzas($productName, $productDescription, $prixMoyenne, $prixLarge, $isVeg, $isPigless)
    {
        $pizza = new \Project\Models\ProduitsManager();
        $addPizzas = $pizza->addPizzas($productName, $productDescription, $prixMoyenne, $prixLarge, $isVeg, $isPigless);
        header('Location: indexAdmin.php?action=listPizzas');
    }

    public function deletePizza($id)
    {
        $pizza = new \Project\Models\ProduitsManager();
        $deletePizzas = $pizza->deletePizza($id);
        header('Location: indexAdmin.php?action=listPizzas');
    }

    public function selectPizza($id)
    {
        $pizza = new \Project\Models\ProduitsManager();
        $selectedPizza = $pizza->selectPizza($id);
        require 'app/Views/back/pizza.php';
    }

    public function updatePizza($id, $productName, $productDescription, $prixMoyenne, $prixLarge, $isVeg, $isPigless)
    {
        $article = new \Project\Models\ProduitsManager();
        $updateArticle = $article->updatePizza($id, $productName, $productDescription, $prixMoyenne, $prixLarge, $isVeg, $isPigless);
        header('Location: indexAdmin.php?action=listPizzas');
    }

    /*************************** burgers ********************************/

    public function listBurgers()
    {
        $burgers = new \Project\Models\ProduitsManager();
        $allBurgers = $burgers->allBurgers();
        require 'app/Views/back/listBurgers.php';
    }

    public function addBurger($productName, $productDescription, $prix)
    {
        $burger = new \Project\Models\ProduitsManager();
        $addBurger = $burger->addBurger($productName, $productDescription, $prix);
        header('Location: indexAdmin.php?action=listBurgers');
    }

    public function deleteBurger($id)
    {
        $burger = new \Project\Models\ProduitsManager();
        $deleteBurger = $burger->deleteBurger($id);
        header('Location: indexAdmin.php?action=listBurgers');
    }

    public function selectBurger($id)
    {
        $burger = new \Project\Models\ProduitsManager();
        $selectedBurger = $burger->selectBurger($id);
        require 'app/Views/back/burger.php';
    }

    public function updateBurger($id, $productName, $productDescription, $prix)
    {
        $burger = new \Project\Models\ProduitsManager();
        $updateBurger = $burger->updateBurger($id, $productName, $productDescription, $prix);
        header('Location: indexAdmin.php?action=listBurgers');
    }

    /*************************** boissons ********************************/

    public function listBoissons()
    {
        $boissons = new \Project\Models\ProduitsManager();
        $allBoissons = $boissons->allBoissons();
        require 'app/Views/back/listBoissons.php';
    }

    public function addBoisson($productName, $productDescription, $prix, $isAlcool)
    {
        $boisson = new \Project\Models\ProduitsManager();
        $addBoisson = $boisson->addBoisson($productName, $productDescription, $prix, $isAlcool);
        header('Location: indexAdmin.php?action=listBoissons');
    }

    public function deleteBoisson($id)
    {
        $boisson = new \Project\Models\ProduitsManager();
        $deleteboisson = $boisson->deleteBoisson($id);
        header('Location: indexAdmin.php?action=listBoissons');
    }

    public function selectBoisson($id)
    {
        $boisson = new \Project\Models\ProduitsManager();
        $selectedBoisson = $boisson->selectBoisson($id);
        require 'app/Views/back/boisson.php';
    }

    public function updateBoisson($id, $productName, $productDescription, $prix, $isAlcool)
    {
        $boisson = new \Project\Models\ProduitsManager();
        $updateBoisson = $boisson->updateBoisson($id, $productName, $productDescription, $prix, $isAlcool);
        header('Location: indexAdmin.php?action=listBoissons');
    }

    /*************************** A la une  ********************************/

    public function listALaUne()
    {
        $aLaUne = new \Project\Models\ImagesManager();
        $allALaUne = $aLaUne->getALaUne();
        require 'app/Views/back/aLaUne.php';
    }

    public function creatALaUne($title)
    {
        $target_dir = 'app/Public/back/img/aLaUne/'; //spécifie le répertoire où le fichier va être placé
        $target_file = $target_dir.basename($_FILES['fileToUpload']['name']); // spécifie le chemin du fichier à télécharger
        $uploadOk = 1; // n'est pas encore utilisé (sera utilisé plus tard)
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION)); //contient l'extension du fichier (en minuscules)
          // on vérifie que le fichier image est une image réelle
        $check = getimagesize($_FILES['fileToUpload']['tmp_name']);

        if ($check !== false) {
            // verifie la taille du fichier
            if ($_FILES['fileToUpload']['size'] > 50000000) {
                echo 'Désolé, votre fichier est trop volumineux. ';
                $uploadOk = 0;
            }
            // Format autorisé
            if ($imageFileType != 'jpg' && $imageFileType != 'png' && $imageFileType != 'jpeg'
                    && $imageFileType != 'gif') {
                echo 'Seuls les formats JPG, JPEG, PNG & GIF files sont authorisés. ';
                $uploadOk = 0;
            }
            // verifie la valeur de la variable, si 0 erreur
            if ($uploadOk == 0) {
                echo "Désolé, votre avatar n'a pu être envoyé.";
            // si tout est ok on upload
            } else {
                if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_file)) {
                    $imgManager = new \Project\Models\ImagesManager();
                    $uploadALaUne = $imgManager->uploadALaUne($title, $target_file);

                    header('Location: indexAdmin.php?action=listALaUne');
                } else {
                    echo "Désolé, une erreur est survenue dans l'envoi de votre fichier. ";
                }
            }
        } else {
            echo "Ce fichier n'est pas une image. ";
            $uploadOk = 0;
        }
    }

    public function deleteALaUne($id)
    {
        $aLaUne = new \Project\Models\ImagesManager();
        $allALaUne = $aLaUne->deleteALaUne($id);
        header('Location: indexAdmin.php?action=listALaUne');
    }

    /*************************** réducs ********************************/

    public function listReducs()
    {
        $reducs = new \Project\Models\ReducManager();
        $allReducs = $reducs->allReducs();
        require 'app/Views/back/listReducs.php';
    }

    public function addReduc($title, $periode, $condition1, $condition2, $validite)
    {
        $reduc = new \Project\Models\ReducManager();
        $addReduc = $reduc->addReduc($title, $periode, $condition1, $condition2, $validite);
        header('Location: indexAdmin.php?action=listReducs');
    }

    public function deleteReduc($id)
    {
        $reduc = new \Project\Models\ReducManager();
        $deleteRdeduc = $reduc->deleteReduc($id);
        header('Location: indexAdmin.php?action=listReducs');
    }

    public function selectReduc($id)
    {
        $reduc = new \Project\Models\ReducManager();
        $selectedReduc = $reduc->selectReduc($id);
        require 'app/Views/back/reduc.php';
    }

    public function updateReduc($id, $title, $periode, $condition1, $condition2, $validite)
    {
        $reduc = new \Project\Models\ReducManager();
        $updateRdeduc = $reduc->updateReduc($id, $title, $periode, $condition1, $condition2, $validite);
        header('Location: indexAdmin.php?action=listReducs');
    }

    /*************************** slides ********************************/

    public function listSlides()
    {
        $images = new \Project\Models\ImagesManager();
        $allSlides = $images->getSlides();
        require 'app/Views/back/listSlides.php';
    }

    public function deleteSlide($id)
    {
        $slide = new \Project\Models\ImagesManager();
        $deleteArticle = $slide->deleteSlide($id);
        header('Location: indexAdmin.php?action=listSlides');
    }

    public function creatSlide($title)
    {
        $target_dir = 'app/Public/back/img/slides/'; //spécifie le répertoire où le fichier va être placé
          $target_file = $target_dir.basename($_FILES['fileToUpload']['name']); // spécifie le chemin du fichier à télécharger
          $uploadOk = 1; // n'est pas encore utilisé (sera utilisé plus tard)
          $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));  //contient l'extension du fichier (en minuscules)
          $check = getimagesize($_FILES['fileToUpload']['tmp_name']); // on vérifie que le fichier image est une image réelle
          if ($check !== false) {
              if ($_FILES['fileToUpload']['size'] > 50000000) {// verifie la taille du fichier
                  echo 'Désolé, votre fichier est trop volumineux. ';
                  $uploadOk = 0;
              }
              if ($imageFileType != 'jpg' && $imageFileType != 'png' && $imageFileType != 'jpeg' // Format autorisé
                  && $imageFileType != 'gif') {
                  echo 'Seuls les formats JPG, JPEG, PNG & GIF files sont authorisés. ';
                  $uploadOk = 0;
              }
              if ($uploadOk == 0) {// verifie la valeur de la variable, si 0 erreur
                  echo "Désolé, votre avatar n'a pu être envoyé.";
              } else {  // si tout est ok on upload
                  if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_file)) {
                      $imgManager = new \Project\Models\ImagesManager();
                      $uploadImg = $imgManager->uploadSlide($title, $target_file);
                      header('Location: indexAdmin.php?action=listSlides');
                  } else {
                      echo "Désolé, une erreur est survenue dans l'envoi de votre fichier. ";
                  }
              }
          } else {
              echo "Ce fichier n'est pas une image. ";
              $uploadOk = 0;
          }
    }

    /***************************mails ********************************/

    public function listEmails()
    {
        $mails = new \Project\Models\ContactManager();
        $allEmails = $mails->getMails();
        require 'app/Views/back/listEmails.php';
    }

    public function deleteEmail($id)
    {
        $mails = new \Project\Models\ContactManager();
        $deleteEmail = $mails->deleteEmail($id);
        header('Location: indexAdmin.php?action=listEmails');
    }

    /*************************** users ********************************/

    public function updateUser($userId, $userName, $userFirstname, $userAdress, $userPhone, $userMail)
    {
        $user = new \Project\Models\UserManager();
        $updateUser = $user->updateUser($userId, $userName, $userFirstname, $userAdress, $userPhone, $userMail);

        /* obliger de fetch() pour mettre à jour la variable de session, 
            un code type    $_SESSION['userName'] = $userName;
            ne suffisait pas...
            a approfonfir ...*/

       // $user = new \Project\Models\UserManager();
        $userInfos = $user->selectUser($userId);
        $result = $userInfos->fetch();

        $_SESSION['userId'] = $result['userId'];
        $_SESSION['userName'] = $result['userName'];
        $_SESSION['userFirstname'] = $result['userFirstname'];
        $_SESSION['userPhone'] = $result['userPhone'];
        $_SESSION['userAdress'] = $result['userAdress'];
        $_SESSION['userMail'] = $result['userMail'];
        $_SESSION['userPWD'] = $result['userPWD'];


        echo '<script>alert("infos mofifiées avec succes !");</script>';
        require 'app/Views/back/tableauDeBordUser.php';
    }

    public function updateMdpUser($ancienMdp, $nouveauMdpCrypte, $nouveauMdpConfirmCrypte)
    {
        $isPasswordCorrect3 = password_verify($ancienMdp, $_SESSION['userPWD']);
        if (($isPasswordCorrect3 == true)) {
            $mdp = new \Project\Models\UserManager();
            $newMdp = $mdp->updateMdpUser($nouveauMdpCrypte);

            echo '<script>alert("mot de passe mofifié avec succes !");</script>';
            require 'app/Views/back/tableauDeBordUser.php';
        } else {
           

            echo '<script>alert("mot de passe incorect");</script>';
           
            require 'app/Views/back/tableauDeBordUser.php';
        }
    }

    public function deleteUser()
    {
        $user = new \Project\Models\UserManager();
        $deleteUser = $user->deleteUser();
       
        $slides = new \Project\Models\ImagesManager();
        $allSlides = $slides->getSlides();
        $aLaUne = new \Project\Models\ImagesManager();
        $allALaUne = $aLaUne->getALaUne();
        $reducs = new \Project\Models\ReducManager();
        $allReducs = $reducs->allReducs();

        echo '<script>alert(" Au revoir !");</script>';
        require 'app/Views/front/accueil.php';
        
        session_destroy();
       
    }

    /*************************** orders ********************************/

    public function listOrderAdmin()
    {
        $user = new \Project\Models\OrderManager();
        $bestUser = $user->adminOrder();
        require 'app/Views/back/listUsers.php';
    }

    public function deleteHistory($id)
    {
        $history = new \Project\Models\UserManager();
        $deleteHistory = $history->deleteHistory($id);
        require 'app/Views/back/tableauDeBordUser.php';
    }

    public function listOrder()
    {
        $order = new \Project\Models\OrderManager();
        $id = $_SESSION['userId'];
        $allOrder = $order->getOrderList($id);

        require 'app/Views/back/orderList.php';
    }

    /*************************** livreurs ********************************/

    public function listLivreur()
    {
        $livreur = new \Project\Models\LivreurManager();
        $listLivreur = $livreur->listLivreur();
        require 'app/Views/back/listLivreurs.php';
    }

    public function addLivreur($livreurName, $livreurPhone, $livreurEmail)
    {
        $livreur = new \Project\Models\LivreurManager();
        $addLivreur = $livreur->addLivreur($livreurName, $livreurPhone, $livreurEmail);
        header('Location: indexAdmin.php?action=listLivreur');
    }

    public function deleteLivreur($id)
    {
        $livreur = new \Project\Models\LivreurManager();
        $deleteLivreur = $livreur->deleteLivreur($id);
        header('Location: indexAdmin.php?action=listLivreur');
    }

    public function selectLivreur($id)
    {
        $livreur = new \Project\Models\LivreurManager();
        $selectedLivreur = $livreur->selectLivreur($id);
        require 'app/Views/back/livreur.php';
    }

    public function updateLivreur($id, $livreurName, $livreurPhone, $livreurEmail)
    {
        $livreur = new \Project\Models\LivreurManager();
        $updateLivreur = $livreur->updateLivreur($id, $livreurName, $livreurPhone, $livreurEmail);
        header('Location: indexAdmin.php?action=listLivreur');
    }
}
