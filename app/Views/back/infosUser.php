<?php ob_start();?>

<h1>Infos utilisateur</h1>
<div>

    <form action="indexAdmin.php?action=updateUser&id=<?= $_SESSION['userId']?>" method="POST">

        <label for="userName">Votre nom : </label>
        <input type="text" id="userName" name="userName" value="<?= $_SESSION['userName'] ?>">

        <label for="userFirstname">Votre prénom : </label>
        <input type="text" id="userFirstname" name="userFirstname" value="<?= $_SESSION['userFirstname'] ?>">

        <label for="userAdress">Votre adresse : </label>
        <input type="text" id="userAdress" name="userAdress" value="<?= $_SESSION['userAdress'] ?>">

        <label for="userPhone">Votre numero de téléphone : </label>
        <input type="text" id="userPhone" name="userPhone" value="<?= $_SESSION['userPhone'] ?>">
        
        <!-- type text pour les espaces dans le numero... varchar en bdd-->

        <label for="userMail">Votre adresse mail : </label>
        <input type="email" id="userMail" name="userMail" value="<?= $_SESSION['userMail'] ?>">

        <div>
            <button type="submit" data-dismiss="modal">Modifier</button>
        </div>

    </form>
</div>

<?php $content = ob_get_clean()?>
<?php require 'templates/templateUser.php'?>