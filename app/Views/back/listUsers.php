<?php ob_start(); ?>
<h1>gestion des users</h1>
<section>

    <?php foreach($allUser as $user){ ?>
    <div class="card_articles">
        <p><?= $user["userName"] ?></p>
        <p><?= $user["userFirstname"] ?></p>
        <p><?= $user["userMail"] ?></p>
       
  
    </div>
    <?php   } ?>

</section>

<?php $content = ob_get_clean(); ?>
<!--ob_get_clean — Lit le contenu courant du tampon de sortie puis l'efface-->
<?php require 'templates/template.php'; ?>