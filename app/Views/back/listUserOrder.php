<?php ob_start();?>
<h1> Liste des commandes</h1>
<section>

<?php var_dump($allOrder) ?>
    <?php foreach($allOrder as $order) { ?>
    <div class="card_articles">
        <div class="article_title">date de commande : <?= $order["order_date"] ?></div>
        
        <div>
          
        </div>
    </div>
    <?php   } ?>

</section>
<?php $content = ob_get_clean()?>
<?php require 'templates/templateUser.php'?>

