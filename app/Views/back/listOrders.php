<?php ob_start();?>

<h1> Liste des commandes</h1>

<section>
    <?php foreach($inscriptonUsers as $newUser) { ?>

    <div class="card_articles">
        <div class="article_title">numero de commande : <?= $newUser["userName"] ?></div>
    </div>

    <?php   } ?>
</section>

<?php $content = ob_get_clean()?>
<?php require 'templates/template.php'?>

