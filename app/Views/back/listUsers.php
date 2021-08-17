<?php ob_start(); ?>
<h1>gestion des commandes</h1>
<section>

    <?php foreach($bestUser as  $user){ ?>
    <div class="card_articles">
        <div class="article_content">numero de commande : <?= $user["userId"] ?></div>
        <div>faite par : <?= $user["userName"] ?></div>
        <div>date du : <?= $user["order_date"] ?></div>
        <div>montant total : <?= $user["order_price"] ?> €</div>
        <div>livrée par: <?= $user["livreurName"] ?></div>

       
  
    </div>
    <?php   } ?>

</section>

<?php $content = ob_get_clean(); ?>
<!--ob_get_clean — Lit le contenu courant du tampon de sortie puis l'efface-->
<?php require 'templates/template.php'; ?>