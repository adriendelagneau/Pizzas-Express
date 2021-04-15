<?php ob_start(); ?>
<main id="inscrption">
    <h1>inscription</h1>
    <form action="index.php?action=createUser" method="post">
        <div>
            <label for="pseudo">Prenom : </label>
            <input type="text" placeholder="pseudo" name="pseudo" id="pseudo">
        </div>
        <div>
            <label for="pwd">Mot de passe : </label>
            <input type="text" placeholder="votre mot de passe" name="pwd" id="pwd">
        </div>
        <div>
            <input type="submit" name="">
        </div>
    </form>
</main>
<?php $content = ob_get_clean(); ?>
<?php require "templates/template.php"; ?>