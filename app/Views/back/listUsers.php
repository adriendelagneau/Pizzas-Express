<?php ob_start(); ?>

<h1>Gestion des commandes</h1>

<section>
    <?php foreach($bestUser as  $user){ ?>

    <div class="card_articles">

        <div class="article_content">Numero de commande : <?= $user["userId"] ?></div>
        <div>Faite par : <?= $user["userName"] ?></div>
        <div>Date du : <?= $user["order_date"] ?></div>
        <div>Montant total : <?= $user["order_price"] ?> €</div>
        <div>Livrée par: <?= $user["livreurName"] ?></div>
 
    </div>
    
    <?php   } ?>

</section>

<?php $content = ob_get_clean(); ?>
<?php require 'templates/template.php'; ?>