<?php ob_start();?>
<h1> Liste des commandes</h1>
<section>

    <?php foreach($allOrder as $order){ ?>
    <div class="card_articles">
        <div class="article_title">numero de commande : <?= $order["id"] ?></div>
        <div class="article_content">date : <?= $order["date"] ?></div>
        <div class="article_content">details : <?= $order["userId"] ?>€</div>
        <div>
          
        </div>
    </div>
    <?php   } ?>

</section>
<?php $content = ob_get_clean()?>
<?php require 'templates/templateUser.php'?>

