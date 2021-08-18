<?php

session_start();

require_once __DIR__.'/vendor/autoload.php';

try {
    $backController = new Project\Controllers\back\BackController();

    if (isset($_GET['action'])) {
        if ($_SESSION != []) {
            if ($_GET['action'] == 'tableauDeBord') {
                $backController->tableauDeBord();
            } 
            elseif ($_GET['action'] == 'tdbProducts') {
                $backController->tdbProducts();
            } 
            elseif ($_GET['action'] == 'tableauDeBordUser') {
                $backController->tableauDeBordUser();
            } 
            elseif ($_GET['action'] == 'deconnexion') {
                $backController->deconnexion();
            } 
            elseif ($_GET['action'] == 'listSlides') {
                $backController->listSlides();
            } 
            elseif ($_GET['action'] == 'listPizzas') {
                $backController->listPizzas();
            } 
            elseif ($_GET['action'] == 'listALaUne') {
                $backController->listALaUne();
            } 
            elseif ($_GET['action'] == 'listBurgers') {
                $backController->listburgers();
            } 
            elseif ($_GET['action'] == 'listBoissons') {
                $backController->listBoissons();
            } 
            elseif ($_GET['action'] == 'listReducs') {
                $backController->listReducs();
            } 
            elseif ($_GET['action'] == 'listEmails') {
                $backController->listEmails();
            } 
            elseif ($_GET['action'] == 'listOrderAdmin') {
                $backController->listOrderAdmin();
            } 
            elseif ($_GET['action'] == 'listLivreur') {
                $backController->listLivreur();
            } 
            elseif ($_GET['action'] == 'infosUser') {
                $backController->infosUser();
            } 
            elseif ($_GET['action'] == 'orderList') {
                $backController->listOrder();
            } 
            elseif ($_GET['action'] == 'changeMdp') {
                $backController->changeMdp();
            } 
            elseif ($_GET['action'] == 'desinscription') {
                $backController->desinscription();
            }

            /************* pizzas *****************/

            elseif ($_GET['action'] == 'addPizzas') {
                $productName = htmlspecialchars($_POST['productName']);
                $productDescription = htmlspecialchars($_POST['productDescription']);
                $prixMoyenne = htmlspecialchars($_POST['prixMoyenne']);
                $prixLarge = htmlspecialchars($_POST['prixLarge']);
                $isVeg = $_POST['isVeg'];
                $isPigless = $_POST['isPigless'];
                $backController->addPizzas($productName, $productDescription, $prixMoyenne, $prixLarge, $isVeg, $isPigless);
            } 
            elseif ($_GET['action'] == 'deletePizzas') {
                $id = $_GET['id'];
                $backController->deletePizza($id);
            } 
            elseif ($_GET['action'] == 'selectPizza') {
                $id = $_GET['id'];
                $backController->selectPizza($id);
            } 
            elseif ($_GET['action'] == 'updatePizza') {
                $id = $_GET['id'];
                $productName = htmlspecialchars($_POST['productName']);
                $productDescription = htmlspecialchars($_POST['productDescription']);
                $prixMoyenne = htmlspecialchars($_POST['prixMoyenne']);
                $prixLarge = htmlspecialchars($_POST['prixLarge']);
                $isVeg = htmlspecialchars($_POST['isVeg']);
                $isPigless = htmlspecialchars($_POST['isPigless']);
                $backController->updatePizza($id, $productName, $productDescription, $prixMoyenne, $prixLarge, $isVeg, $isPigless);
            }

            /************* burgers *****************/

            elseif ($_GET['action'] == 'addBurger') {
                $productName = htmlspecialchars($_POST['productName']);
                $productDescription = htmlspecialchars($_POST['productDescription']);
                $prix = htmlspecialchars($_POST['prix']);
                $backController->addBurger($productName, $productDescription, $prix);
            } 
            elseif ($_GET['action'] == 'deleteBurger') {
                $id = $_GET['id'];
                $backController->deleteBurger($id);
            } 
            elseif ($_GET['action'] == 'selectBurger') {
                $id = $_GET['id'];
                $backController->selectBurger($id);
            } 
            elseif ($_GET['action'] == 'updateBurger') {
                $id = $_GET['id'];
                $productName = htmlspecialchars($_POST['productName']);
                $productDescription = htmlspecialchars($_POST['productDescription']);
                $prix = htmlspecialchars($_POST['prix']);
                $backController->updateBurger($id, $productName, $productDescription, $prix);
            }

            /************* boissons *****************/

            elseif ($_GET['action'] == 'addBoisson') {
                $productName = htmlspecialchars($_POST['productName']);
                $productDescription = htmlspecialchars($_POST['productDescription']);
                $prix = htmlspecialchars($_POST['prix']);
                $isAlcool = htmlspecialchars($_POST['isAlcool']);
                $backController->addBoisson($productName, $productDescription, $prix, $isAlcool);
            } 
            elseif ($_GET['action'] == 'deleteBoisson') {
                $id = $_GET['id'];
                $backController->deleteBoisson($id);
            } 
            elseif ($_GET['action'] == 'selectBoisson') {
                $id = $_GET['id'];
                $backController->selectBoisson($id);
            } 
            elseif ($_GET['action'] == 'updateBoisson') {
                $id = $_GET['id'];
                $productName = htmlspecialchars($_POST['productName']);
                $productDescription = htmlspecialchars($_POST['productDescription']);
                $prix = htmlspecialchars($_POST['prix']);
                $isAlcool = htmlspecialchars($_POST['isAlcool']);
                $backController->updateBoisson($id, $productName, $productDescription, $prix, $isAlcool);
            }
            /************* A la une *****************/

            elseif ($_GET['action'] == 'creatALaUne') {
                $title = htmlspecialchars($_POST['title']);
                if (!empty($title)) {
                    $backController->creatALaUne($title);
                }
            } 
            elseif ($_GET['action'] == 'deleteALaUne') {
                $id = $_GET['id'];
                $backController->deleteALaUne($id);
            }

            /************* réducs *****************/

            elseif ($_GET['action'] == 'addReduc') {
                $title = htmlspecialchars($_POST['title']);
                $periode = htmlspecialchars($_POST['periode']);
                $condition1 = htmlspecialchars($_POST['condition1']);
                $condition2 = htmlspecialchars($_POST['condition2']);
                $validite = htmlspecialchars($_POST['validite']);
                $backController->addReduc($title, $periode, $condition1, $condition2, $validite);
            } 
            elseif ($_GET['action'] == 'deleteReduc') {
                $id = $_GET['id'];
                $backController->deleteReduc($id);
            } 
            elseif ($_GET['action'] == 'selectReduc') {
                $id = $_GET['id'];
                $backController->selectReduc($id);
            } 
            elseif ($_GET['action'] == 'updateReduc') {
                $id = $_GET['id'];
                $title = htmlspecialchars($_POST['title']);
                $periode = htmlspecialchars($_POST['periode']);
                $condition1 = htmlspecialchars($_POST['condition1']);
                $condition2 = htmlspecialchars($_POST['condition2']);
                $validite = htmlspecialchars($_POST['validite']);
                $backController->updateReduc($id, $title, $periode, $condition1, $condition2, $validite);
            }

            /************* slides *****************/

            elseif ($_GET['action'] == 'creatSlide') {
                $title = htmlspecialchars($_POST['title']);

                if (!empty($title)) {
                    $backController->creatSlide($title);
                }
            } 
            elseif ($_GET['action'] == 'deleteSlide') {
                $id = $_GET['id'];
                $backController->deleteSlide($id);
            }

            /************* emails *****************/

            elseif ($_GET['action'] == 'deleteEmail') {
                $id = $_GET['id'];
                $backController->deleteEmail($id);
            }

            /************* users *****************/

            elseif ($_GET['action'] == 'updateUser') {
                $userId = $_SESSION['userId'];
                $userPWD = $_SESSION['userPWD'];
                $userName = htmlspecialchars($_POST['userName']);
                $userFirstname = htmlspecialchars($_POST['userFirstname']);
                $userAdress = htmlspecialchars($_POST['userAdress']);
                $userPhone = htmlspecialchars($_POST['userPhone']);
                $userMail = htmlspecialchars($_POST['userMail']);

                
                $backController->updateUser($userId, $userName, $userFirstname, $userAdress, $userPhone, $userMail);
            } 
            elseif ($_GET['action'] == 'changementMdpUser') {
                $ancienMdp = $_POST['ancienMdp'];
                // $ancienMdpCrypte = password_hash($ancienMdp , PASSWORD_DEFAULT);

                $nouveauMdp = $_POST['nouveauMdp'];
                $nouveauMdpCrypte = password_hash($nouveauMdp, PASSWORD_DEFAULT);

                $nouveauMdpConfirm = $_POST['nouveauMdpConfirm'];
                $nouveauMdpConfirmCrypte = password_hash($nouveauMdpConfirm, PASSWORD_DEFAULT);

                $backController->updateMdpUser($ancienMdp, $nouveauMdpCrypte, $nouveauMdpConfirmCrypte);
            } 
            elseif ($_GET['action'] == 'deleteUser') {
                $userId = $_SESSION['userId'];
                $backController->deleteUser();
            }

            /************* livreurs *****************/
            
            elseif ($_GET['action'] == 'addLivreur') {
                $livreurName = htmlspecialchars($_POST['livreurName']);
                $livreurPhone = htmlspecialchars($_POST['livreurPhone']);
                $livreurEmail = htmlspecialchars($_POST['livreurEmail']);

                $backController->addLivreur($livreurName, $livreurPhone, $livreurEmail);
            } 
            elseif ($_GET['action'] == 'deleteLivreur') {
                $id = $_GET['id'];
                $backController->deleteLivreur($id);
            } 
            elseif ($_GET['action'] == 'selectLivreur') {
                $id = $_GET['id'];
                $backController->selectLivreur($id);
            } 
            elseif ($_GET['action'] == 'updateLivreur') {
                $id = $_GET['id'];
                $livreurName = htmlspecialchars($_POST['livreurName']);
                $livreurPhone = htmlspecialchars($_POST['livreurPhone']);
                $livreurEmail = htmlspecialchars($_POST['livreurEmail']);

                $backController->updateLivreur($id, $livreurName, $livreurPhone, $livreurEmail);
            } 
            elseif ($_GET['action'] == 'deleteHistory') {
                $id = $_SESSION['userId'];
                $backController->deleteHistory($id);
            }
        } else {
            $backController->deconnexion();
        }
    } else {
        $backController->tableauDeBord();
    }
} catch (Exception $e) {
    die('Erreur : '.$e->getMessage());
}
