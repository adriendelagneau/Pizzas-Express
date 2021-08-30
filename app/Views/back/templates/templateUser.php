<!DOCTYPE html>
<html lang='fr'>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="vente de pizzas & autres en livraison sur vannes">
    <title>Pizza Express</title>
    <script src="https://kit.fontawesome.com/f964f4d052.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="shortcut icon" type="image/png" href="app/Public/front/img/favicon.png">
  
    <link rel="stylesheet" href="app/Public/back/css/style.css">

     <!-- P.W.A-->
     <link rel="manifest" href="manifest.json">
    <link rel="apple-touch-icon" href="app/Public/front/img/Logo_72.png">
    <meta name="apple-mobile-web-app-status-bar" content="white">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="black">
</head>

<body>
    <header>
        <nav>
            <div id="icons">
                <a href="indexAdmin.php?action=deconnexion" aria-label="deconnexion"><i class="fas fa-times"></i></a>
                <a href="indexAdmin.php?action=tableauDeBordUser" aria-label="tableau de bord"><i class="fas fa-arrow-left"></i></a>
            </div>
        </nav>
    </header>

    <div class="container"><?= $content?></div>

    <footer>
        <div id="mentions">
            <img class="bordure" src="app/Public/front/img/PizzasExpressLogo.jpg" alt="logo pizzas express">
            <div>
                <p>Creation du site : <a href="#">B166ER</a> </p>
            </div>
        </div>
    </footer>
</body>

</html>