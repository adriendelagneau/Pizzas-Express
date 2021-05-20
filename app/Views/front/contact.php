<?php ob_start(); ?>
<main class="contact">
    <h1>Contacte</h1>
    <p>Commander au 02 97 27 12 **<p>
    <h2>notre magasin</h2>
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10749.333714569675!2d-2.7725067327741333!3d47.65851869238424!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48101e997277959f%3A0xaf89c0c724c958d3!2s2%20Place%20de%20la%20Lib%C3%A9ration%2C%2056000%20Vannes!5e0!3m2!1sfr!2sfr!4v1617021675983!5m2!1sfr!2sfr"
        width="800" height="600" style="border:0;" allowfullscreen="true" loading="lazy"></iframe>
    <h2>nous laisser un message</h2>
    <div class="form_contact">
        <form action="index.php?action=contactMail" method="post" id="inscription">
            <label for="name">Nom :</label>
            <input type="text" id="name" name="name" placeholder="Legrand">
            <span class="error">
            <?php if(isset($errors["required_name"])){echo $errors["required_name"];} ?>                
            </span>
            <label for="firstname">Prenom :</label>
            <input type="text" id="firstname" name="firstname" placeholder="John">
            <span class="error">
            <?php if(isset($errors["required_fisrtname"])){echo $errors["required_fisrtname"]; }?>
            </span>
            <label for="adress">Votre adresse :</label>
            <input type="text" name="adress" id="adress" placeholder="3 rue des peupliers"></input>
            <div id="item"></div>           
            <span class="error">
            <?php if(isset($errors["required_adress"])){echo $errors["required_adress"]; }?>
            </span>
            <label for="Email">Email :</label>
            <input type="mail" id="email" name="mail" placeholder="JohnLegrand@gmx.fr">
            <span class="error">
            <?php if(isset($errors["invalid_email"])){ echo  $errors["invalid_email"];} ?>
            </span>
            <span class="error">
            <?php if(isset($errors["required_email"])){echo  $errors["required_email"];} ?>
            </span>
            <label for="Sujet">Sujet :</label>
            <input type="text" id="sujet" name="sujet" placeholder="L'objet de votre message">
            <span class="error">
            <?php if(isset($errors["required_sujet"])){echo $errors["required_sujet"]; }?>
            </span>
            <label for="Message">votre message :</label>
            <textarea id="content" name="content"></textarea>
            <span class="error">
            <?php if(isset($errors["required_content"])){echo  $errors["required_content"]; }?>
            </span>
            <span class="error">
            <?php if(isset($errors["too_long_message"])){echo $errors["too_long_message"];}?>
            </span>   
            <input  id="submit" type="submit" ></input>
        </form>
    </div>
</main>
<aside>
    <h2>A la une</h2>

    <?php foreach($allALaUne as $aLaUne){ ?>
    <article class="article_show_on_on">
        <p><?= $aLaUne["title"] ?></p>
        <p> <img src="<?= $aLaUne["imgAdress"] ?>" alt="<?= $aLaUne['title'] ?>"> </p>
    </article>
    <?php   } ?>
    
</aside>
<?php $content = ob_get_clean(); ?>
<?php require "templates/template.php"; ?>