<!DOCTYPE html>

<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="description" content="vente de pizzas & autres en livraison sur vannes">
    <meta name="viewport" content="width=device-width, initial scale=1.0">
    <title> Pizzas Express</title>
    <script src="https://kit.fontawesome.com/f964f4d052.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="shortcut icon" type="image/png" href="app/Public/front/img/favicon.png">
    <link rel="stylesheet" href="app/Public/front/css/style.css">
</head>

<body>
    <header>
        <nav>
            <div id="logo"><a href='index.php'><img src="app/Public/front/img/PizzasExpressLogo.jpg"
                        alt="logo pizzas express"></a>
            </div>
            <ul id="menu_list">
                <li><a href="index.php"> Accueil</a></li>
                <li><a href="index.php?action=pizzas"> Pizzas</a></li>
                <li><a href="index.php?action=burger">Burgers </a></li>
                <li><a href="index.php?action=boissons"> Boissons</a></li>
                <li><a href="index.php?action=contact"> Contact</a></li>
            </ul>
            <div id="icons">
                <p> <img src="app/Public/front/img/PizzasExpressLogo.jpg" alt="logo pizzas express"></p>
                <div id="burger"><i class="fa fa-bars"></i></div>
            </div>
        </nav>
    </header>

    <div class="container"><?= $content?></div>

    <footer>
        <div id="socials-links">
            <h3>reseaux sociaux</h3>
            <div>
                <a href="#"><i class="fab fa-discord"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fas fa-at"></i></a>
                <a href="#"><i class="fab fa-github"></i></a>
            </div>
        </div>
        <div id="mentions">
            <p id="icon_connexion"><img class="bordure" src="app/Public/front/img/benderIcon.png"
                    alt="connexion administrateur"></p>
            <div id="infos">
                <p><a href="mentions.html" target="_blank">Mentions Legales</a></p>
                <p>Creation du site : <a href="">B166ER</a> </p>
                <p>Copyright 2021 reproduction interdite</p>
            </div>
        </div>
    </footer>
    <script src="app/Public/front/js/app.js"></script>
    <script src="app/Public/front/js/api.js"></script>
    <script src="app/Public/front/js/ajax.js"></script>
</body>

</html>