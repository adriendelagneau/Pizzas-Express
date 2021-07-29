<?php

use Project\Controllers\Back\BackController;

session_start();

require_once  __DIR__ . "/vendor/autoload.php";

try{
    $backController = new Project\Controllers\back\BackController();

    if(isset($_GET["action"])){
      
        if($_GET["action"] == "tableauDeBord"){        
            $backController->tableauDeBord();  
            }
        else if($_GET["action"] == "tdbProducts"){
            $backController->tdbProducts();
            }
        else if($_GET["action"] == "deconnexion"){
            $backController->deconnexion();
            }
        else if($_GET["action"] == "listSlides"){
            $backController->listSlides();
            }
        else if($_GET["action"] == "listPizzas"){
            $backController->listPizzas();
            }   
        else if($_GET["action"] == "listALaUne"){
            $backController->listALaUne();
                }
        else if($_GET["action"] == "listBurgers"){
            $backController->listburgers();
            }  
        else if($_GET["action"] == "listBoissons"){
            $backController->listBoissons();
            }
        else if($_GET["action"] == "listReducs"){
                $backController->listReducs();
            }
        else if($_GET["action"] == "listEmails"){
            $backController->listEmails();
            }
            else if($_GET["action"] == "infosUser"){
                $backController->infosUser();
                }
                else if($_GET["action"] == "orderList"){
                    $backController->orderlist();
                    }


/************* pizzas *************** */       
        elseif($_GET['action'] == 'addPizzas'){              
            $productName = htmlspecialchars($_POST['productName']);
            $productDescription = htmlspecialchars($_POST['productDescription']);
            $prixMoyenne = htmlspecialchars($_POST['prixMoyenne']);
            $prixLarge = htmlspecialchars($_POST['prixLarge']);
            $isVeg = $_POST['isVeg'];
            $isPigless = $_POST['isPigless'];
            $backController->addPizzas($productName, $productDescription, $prixMoyenne, $prixLarge,$isVeg,$isPigless);
        }  
        elseif($_GET["action"] == "deletePizzas"){
            $id = $_GET["id"];
            $backController->deletePizza($id);
        }
        elseif($_GET["action"] == "selectPizza"){
            $id = $_GET["id"];
            $backController->selectPizza($id);
        }                  
        elseif($_GET["action"] == "updatePizza"){
            $id = $_GET["id"];
            $productName = htmlspecialchars($_POST["productName"]);
            $productDescription = htmlspecialchars($_POST["productDescription"]);
            $prixMoyenne = htmlspecialchars($_POST["prixMoyenne"]);
            $prixLarge = htmlspecialchars($_POST["prixLarge"]);     
            $isVeg = htmlspecialchars($_POST["isVeg"]);  
            $isPigless = htmlspecialchars($_POST["isPigless"]);    
            $backController->updatePizza($id, $productName, $productDescription, $prixMoyenne, $prixLarge, $isVeg, $isPigless);
        } 

 /****************** burger ******************** */         
        elseif($_GET['action'] == 'addBurger'){              
            $productName = htmlspecialchars($_POST['productName']);
            $productDescription = htmlspecialchars($_POST['productDescription']);
            $prix = htmlspecialchars($_POST['prix']);
            $backController->addBurger($productName, $productDescription, $prix);
        }
        elseif($_GET["action"] == "deleteBurger"){
            $id = $_GET["id"];
            $backController->deleteBurger($id);
        }
        elseif($_GET["action"] == "selectBurger"){
            $id = $_GET["id"];
            $backController->selectBurger($id);
        }       
        elseif($_GET["action"] == "updateBurger"){
            $id = $_GET["id"];
            $productName = htmlspecialchars($_POST["productName"]);
            $productDescription = htmlspecialchars($_POST["productDescription"]);
            $prix = htmlspecialchars($_POST["prix"]);
            $backController->updateBurger($id, $productName, $productDescription, $prix);
        }

/********* boissons ********* */     
        elseif($_GET['action'] == 'addBoisson'){              
            $productName = htmlspecialchars($_POST['productName']);
            $productDescription = htmlspecialchars($_POST['productDescription']);
            $prix = htmlspecialchars($_POST['prix']);
            $isAlcool = htmlspecialchars($_POST['isAlcool']);
            $backController->addBoisson($productName, $productDescription, $prix, $isAlcool);
        }
        elseif($_GET["action"] == "deleteBoisson"){
            $id = $_GET["id"];
            $backController->deleteBoisson($id);
        }
        elseif($_GET["action"] == "selectBoisson"){
            $id = $_GET["id"];
            $backController->selectBoisson($id);
        }      
        elseif($_GET["action"] == "updateBoisson"){
            $id = $_GET["id"];
            $productName = htmlspecialchars($_POST["productName"]);
            $productDescription = htmlspecialchars($_POST["productDescription"]);
            $prix = htmlspecialchars($_POST["prix"]);
            $isAlcool = htmlspecialchars($_POST['isAlcool']);
            $backController->updateBoisson($id, $productName, $productDescription, $prix, $isAlcool);
        }  
             
/********* a la une *********** */
        else if($_GET["action"] == "creatALaUne"){
            $title = htmlspecialchars($_POST["title"]);
                if(!empty($title)){
                    $backController->creatALaUne($title);
            }          
            }   
        elseif($_GET["action"] == "deleteALaUne"){
            $id = $_GET["id"];
            $backController->deleteALaUne($id);
            }

/********* reduc  ************ */
        elseif($_GET['action'] == 'addReduc'){              
            $title = htmlspecialchars($_POST['title']);
            $periode = htmlspecialchars($_POST['periode']);
            $condition1 = htmlspecialchars($_POST['condition1']);
            $condition2 = htmlspecialchars($_POST['condition2']);
            $validite = htmlspecialchars($_POST['validite']);
            $backController->addReduc($title, $periode, $condition1, $condition2, $validite);
        }
        elseif($_GET["action"] == "deleteReduc"){
            $id = $_GET["id"];
            $backController->deleteReduc($id);
        }
        elseif($_GET["action"] == "selectReduc"){
            $id = $_GET["id"];
            $backController->selectReduc($id);
        }      
        elseif($_GET["action"] == "updateReduc"){
            $id = $_GET["id"];
            $title = htmlspecialchars($_POST['title']);
            $periode = htmlspecialchars($_POST['periode']);
            $condition1 = htmlspecialchars($_POST['condition1']);
            $condition2 = htmlspecialchars($_POST['condition2']);
            $validite = htmlspecialchars($_POST['validite']);
            $backController->updateReduc($id, $title, $periode, $condition1, $condition2, $validite);
        } 

/************** slide ******************* */
        else if($_GET["action"] == "creatSlide"){
            $title = htmlspecialchars($_POST["title"]);
                if(!empty($title)){
                    $backController->creatSlide($title);
            }          
            }   
        elseif($_GET["action"] == "deleteSlide"){
            $id = $_GET["id"];
            $backController->deleteSlide($id);
            }

/************** mail ***************** */      
        else if($_GET["action"] == "deleteEmail"){
            $id = $_GET["id"];
            $backController->deleteEmail($id);
            }

            /************************    user   ************************ */




    }else{
        $backController->tableauDeBord();
    }
}catch (Exception $e){
    die("Erreur : " . $e->getMessage());






};
