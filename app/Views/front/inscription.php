<?php ob_start(); ?>

<main class="contact">

    <h1>Contacte</h1>
    <p>Commander au 02 97 27 12 **<p>

    <h3>nous laisser un message</h3>
    <div class="form_contact">

        <form action="index.php?action=inscription" method="POST" id="inscriptionUser">

            <label for="userName">Nom :</label>
            <input type="text" id="userName" name="userName" placeholder="Legrand">
            <span class="error">
                <?php if(isset($errorInscription["required_userName"])){echo $errorInscription["required_userName"];} ?>
            </span>

            <label for="userFirstname">Prenom :</label>
            <input type="text" id="userFirstname" name="userFirstname" placeholder="John">
            <span class="error">
                <?php if(isset($errorInscription["required_userFirstname"])){echo $errorInscription["required_userFirstname"];} ?>
            </span>      

            <label for="userAdress">Votre adresse :</label>
            <input type="text" name="userAdress" id="userAdress" placeholder="3 rue des peupliers">
            <div id="item"></div>
            <span class="error">
                <?php if(isset($errorInscription["required_userAdress"])){echo $errorInscription["required_userAdress"];} ?>
            </span>

            <label for="userPhone">Téléphone:</label>
            <input type="text" id="userPhone" name="userPhone" placeholder="06 10 10 47 **">
            <span class="error">
                <?php if(isset($errorInscription["required_userPhone"])){echo $errorInscription["required_userPhone"];} ?>
            </span>

            <label for="userEmail">Email :</label>
            <input type="email" id="userEmail" name="userMail" placeholder="JohnLegrand@gmx.fr">
            <span class="error">
                <?php if(isset($errorInscription["required_userEmail"])){echo $errorInscription["required_userEmail"];} ?>
            </span>   

            <label for="userPWD">Mot De Passe</label>
            <input type="password" id="userPWD" name="userPWD" placeholder="John"><!-- type pwd -->
            <span class="error">
                <?php if(isset($errorInscription["required_userPWD"])){echo $errorInscription["required_userPWD"];} ?>
            </span>

            <input id="submit" type="submit" value="Envoyer">

        </form>

    </div>

</main>

<aside>
    <h2>A la une</h2>

    <?php foreach($allALaUne as $aLaUne){ ?>
    <article class="article_show_on">
        <p><?= $aLaUne["title"] ?></p>
        <p> <img src="<?= $aLaUne["imgAdress"] ?>" alt="<?= $aLaUne['title'] ?>"> </p>
    </article>
    <?php   } ?>

</aside>

<?php $content = ob_get_clean(); ?>
<?php require "templates/template.php"; ?>