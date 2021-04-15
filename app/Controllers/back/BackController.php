<?php

namespace Project\Controllers\Back;


class BackController{
   

      function tableauDeBord(){
          require "app/Views/back/tableauDeBord.php";
      }
      function tdbProducts(){
          require "app/Views/back/tdbProducts.php";
      }
      function deconnexion(){
          $slides = new \Project\Models\ImagesManager();
          $allSlides = $slides->getSlides(); 
          $aLaUne = new \Project\Models\ImagesManager();
          $allALaUne = $aLaUne->getALaUne();
          $reducs = new \Project\Models\ReducManager();
          $allReducs = $reducs->allReducs(); 
          require "app/Views/front/accueil.php";
      }
/*************************** pizza ****************************** */
      function listPizzas(){
          $pizzas = new \Project\Models\ProduitsManager();
          $allPizzas = $pizzas->allPizzas();
          require "app/Views/back/listPizzas.php";
      } 
      function addPizzas($productName, $productDescription, $prixMoyenne, $prixLarge,$isVeg,$isPigless){
          $pizza = new \Project\Models\ProduitsManager();
          $addPizzas = $pizza->addPizzas($productName, $productDescription, $prixMoyenne, $prixLarge, $isVeg, $isPigless);
          header("Location: indexAdmin.php?action=listPizzas");        
      }   
      function deletePizza($id){
          $pizza = new \Project\Models\ProduitsManager();
          $deletePizzas = $pizza->deletePizza($id);
          header("Location: indexAdmin.php?action=listPizzas");   
      }
      function selectPizza($id){
          $pizza = new \Project\Models\ProduitsManager();
          $selectedPizza = $pizza->selectPizza($id);
          require "app/Views/back/pizza.php";
      }     
      function updatePizza($id, $productName, $productDescription, $prixMoyenne, $prixLarge, $isVeg, $isPigless){
          $article = new \Project\Models\ProduitsManager();
          $updateArticle = $article->updatePizza($id, $productName, $productDescription, $prixMoyenne,$prixLarge, $isVeg, $isPigless);
          header("Location: indexAdmin.php?action=listPizzas");
      }
/****************** burger ******************************************** */
      function listBurgers(){
          $burgers = new \Project\Models\ProduitsManager();
          $allBurgers = $burgers->allBurgers(); 
          require "app/Views/back/listBurgers.php";
      }     
      function addBurger($productName, $productDescription, $prix){
          $burger = new \Project\Models\ProduitsManager();
          $addBurger = $burger->addBurger($productName, $productDescription, $prix);
          header("Location: indexAdmin.php?action=listBurgers");        
      }   
      function deleteBurger($id){
          $burger = new \Project\Models\ProduitsManager();
          $deleteBurger = $burger->deleteBurger($id);
          header("Location: indexAdmin.php?action=listBurgers");   
      }
      function selectBurger($id){
          $burger = new \Project\Models\ProduitsManager();
          $selectedBurger = $burger->selectBurger($id);
          require "app/Views/back/burger.php";
      }     
      function updateBurger($id, $productName, $productDescription, $prix){
          $burger = new \Project\Models\ProduitsManager();
          $updateBurger = $burger->updateBurger($id,$productName, $productDescription, $prix);
          header("Location: indexAdmin.php?action=listBurgers");
      }
/************** boissons ********************** */
      function listBoissons(){
          $boissons = new \Project\Models\ProduitsManager();
          $allBoissons = $boissons->allBoissons(); 
          require "app/Views/back/listBoissons.php";
      }   
      function addBoisson($productName, $productDescription, $prix, $isAlcool){
          $boisson = new \Project\Models\ProduitsManager();
          $addBoisson = $boisson->addBoisson($productName, $productDescription, $prix, $isAlcool);
          header("Location: indexAdmin.php?action=listBoissons");        
      }   
      function deleteBoisson($id){
          $boisson = new \Project\Models\ProduitsManager();
          $deleteboisson = $boisson->deleteBoisson($id);
          header("Location: indexAdmin.php?action=listBoissons");   
    }
      function selectBoisson($id){
          $boisson = new \Project\Models\ProduitsManager();
          $selectedBoisson = $boisson->selectBoisson($id);
          require "app/Views/back/boisson.php";
      }     
      function updateBoisson($id, $productName, $productDescription, $prix, $isAlcool){
          $boisson = new \Project\Models\ProduitsManager();
          $updateBoisson = $boisson->updateBoisson($id,$productName, $productDescription, $prix, $isAlcool);
          header("Location: indexAdmin.php?action=listBoissons");
      }
/******************* a la une ***************************** */
      function listALaUne(){
          $aLaUne = new \Project\Models\ImagesManager();
         $allALaUne = $aLaUne->getALaUne(); 
          require "app/Views/back/aLaUne.php";
        }
      function creatALaUne($title){    
          $target_dir = "app/Public/back/img/aLaUne/"; 
          $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
          $uploadOk = 1; 
          $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION)); 
          $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);  
          if ($check !== false) {
              if ($_FILES["fileToUpload"]["size"] > 50000000) {
                  echo "Désolé, votre fichier est trop volumineux. ";
                  $uploadOk = 0;
              }
              if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                  && $imageFileType != "gif") {
                  echo "Seuls les formats JPG, JPEG, PNG & GIF files sont authorisés. ";
                  $uploadOk = 0;
              }
              if ($uploadOk == 0) {
                  echo "Désolé, votre avatar n'a pu être envoyé.";
              } else {
                    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
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
      function deleteALaUne($id){
          $aLaUne = new \Project\Models\ImagesManager();
          $allALaUne = $aLaUne->deleteALaUne($id); 
          header("Location: indexAdmin.php?action=listALaUne");   
      }
/******************* reduc *********************************** */
      function listReducs(){
          $reducs = new \Project\Models\ReducManager();
          $allReducs = $reducs->allReducs(); 
          require "app/Views/back/listReducs.php";
      }          
      function addReduc($title, $periode, $condition1, $condition2, $validite){
          $reduc = new \Project\Models\ReducManager();
          $addReduc = $reduc->addReduc($title, $periode, $condition1, $condition2, $validite);
          header("Location: indexAdmin.php?action=listReducs");        
      }
      function deleteReduc($id){
          $reduc = new \Project\Models\ReducManager();
          $deleteRdeduc = $reduc->deleteReduc($id);
          header("Location: indexAdmin.php?action=listReducs");   
      }        
      function selectReduc($id){
          $reduc = new \Project\Models\ReducManager();
          $selectedReduc = $reduc->selectReduc($id);
          require "app/Views/back/reduc.php";
      }     
      function updateReduc($id, $title, $periode, $condition1, $condition2, $validite){
          $reduc = new \Project\Models\ReducManager();
          $updateRdeduc = $reduc->updateReduc($id, $title, $periode, $condition1, $condition2, $validite);
          header("Location: indexAdmin.php?action=listReducs");
      }
/******************** slides ***************************** */
      function listSlides(){
          $images = new \Project\Models\ImagesManager();
          $allSlides = $images->getSlides(); 
          require "app/Views/back/listSlides.php";
      }
      function deleteSlide($id){
          $slide = new \Project\Models\ImagesManager();
          $deleteArticle = $slide->deleteSlide($id);
          header("Location: indexAdmin.php?action=listSlides");   
      }
      function creatSlide($title){  
          $target_dir = "app/Public/back/img/slides/";
          $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
          $uploadOk = 1;
          $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION)); 
          $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
          if ($check !== false) {
              if ($_FILES["fileToUpload"]["size"] > 50000000) {
                    echo "Désolé, votre fichier est trop volumineux. ";
                    $uploadOk = 0;
              }
              if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                  && $imageFileType != "gif") {
                  echo "Seuls les formats JPG, JPEG, PNG & GIF files sont authorisés. ";
                  $uploadOk = 0;
              }
              if ($uploadOk == 0) {
                  echo "Désolé, votre avatar n'a pu être envoyé.";
              } else {
                    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                        $imgManager = new \Project\Models\imagesManager();
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
/************************** mail ******************************* */
        function listEmails(){
            $mails = new \Project\Models\ContactManager();
            $allEmails = $mails->getMails(); 
            require "app/Views/back/listEmails.php";
        }
        function deleteEmail($id){
            $mails = new \Project\Models\ContactManager();
            $deleteEmail = $mails->deleteEmail($id); 
            header("Location: indexAdmin.php?action=listEmails");
        }   

}