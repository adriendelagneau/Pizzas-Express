<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial scale=1.0">
    <title>Pizza Express</title>
    <script src="https://kit.fontawesome.com/f964f4d052.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="shortcut icon" type="image/png" href="app/Public/front/img/favicon.png">
    <link href="https://fr.allfont.net/allfont.css?fonts=arial-black" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="app/Public/back/css/style.css">
</head>
<body>
    <header>
        <nav>
            <div id="icons">
                <a href="indexAdmin.php?action=deconnexion"><i class="fas fa-times"></i></a>
                <a href="indexAdmin.php?action=tableauDeBord"><i class="fas fa-arrow-left"></i></a>
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