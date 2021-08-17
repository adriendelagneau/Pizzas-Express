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
    <div id='is-show'>
        <p id="close"><i class="fas fa-times"></i></p>
        <h3>connexion user</h3>

        <form action="index.php?action=connexionUser" method="post">

            <label for="pseudoUser">Prenom : </label>
            <input type="text" placeholder="pseudoUser" name="pseudoUser" id="pseudoUser">

            <label for="pwdUser">Password: </label>
            <input type="password" placeholder="pwdUser" name="pwdUser" id="pwdUser">

            <input type="submit" value="OK">
            
        </form>

    </div>
</body>

</html>