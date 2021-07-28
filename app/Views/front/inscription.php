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
                        <?php if(isset($errorz["required_name"])){echo $errorz["required_name"];} ?>
                    </span>

                    <label for="userFirstname">Prenom :</label>
                    <input type="text" id="userFirstname" name="userFirstname" placeholder="John">
                    <span class="error">
                        <?php if(isset($errorz["required_Firstname"])){echo $errorz["required_Firstname"];} ?>
                    </span>      

                    <label for="userAdress">Votre adresse :</label>
                    <input type="text" name="userAdress" id="userAdress" placeholder="3 rue des peupliers"></input>
                    <div id="item"></div>
                  <span class="error">
                        <?php if(isset($error["required_adress"])){echo $errorz["required_adress"];} ?>
                    </span>

                    <label for="userPhone">Téléphone:</label>
                    <input type="number" id="userPhone" name="userPhone" placeholder="06 10 10 47 **">
                    <span class="error">
                        <?php if(isset($errorz["required_Phone-number"])){echo $errorz["required_phone-number"];} ?>
                    </span>

                    <label for="userEmail">Email :</label>
                    <input type="email" id="userEmail" name="userMail" placeholder="JohnLegrand@gmx.fr">
                                 <span class="error">
                        <?php if(isset($errorz["required_Email"])){echo $errorz["required_Email"];} ?>
                    </span>   

                    <label for="userPWD">Mot De Passe</label>
                    <input type="password" id="userPWD" name="userPWD" placeholder="John"><!-- type pwd -->
                   <span class="error">
                        <?php if(isset($errorz["required_password"])){echo $errorz["required_password"];} ?>
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