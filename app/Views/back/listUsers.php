<?php ob_start(); ?>
<h1>gestion des users</h1>
<section>

    <?php foreach($bestUser as  $user){ ?>
    <div class="card_articles">
        <p>numero de commande : <?= $user["userId"] ?></p>
        <p>faite par : <?= $user["userName"] ?></p>
        <p>date du : <?= $user["order_date"] ?></p>
        <p>montant total : <?= $user["order_price"] ?> €</p>
        <p>livrée par: <?= $user["livreurName"] ?></p>

       
  
    </div>
    <?php   } ?>

</section>

<?php $content = ob_get_clean(); ?>
<!--ob_get_clean — Lit le contenu courant du tampon de sortie puis l'efface-->
<?php require 'templates/template.php'; ?>