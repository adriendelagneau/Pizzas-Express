<?php ob_start();?>

<h1> Liste de vos commandes</h1>

<section>
    <?php foreach($allOrder as $order) { ?>

    <div class="card_articles">
        <div class="article_title">numero de commande : <?= $order["order_id"] ?></div>
        <div class="article_content">date : <?= $order["order_date"] ?></div>
        <div class="article_content">prix total : <?= $order["order_price"] ?>€</div> 
    </div>

    <?php   } ?>
</section>

<form action="indexAdmin.php?action=deleteHistory" method="post">
    <input type="submit" value="supprimer votre historique">
</form>

<?php $content = ob_get_clean()?>
<?php require 'templates/templateUser.php'?>

