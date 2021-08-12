<?php ob_start();?>

<h1> Liste des Livreurs</h1>
<section>

    <?php foreach($listLivreur as $livreur){ ?>

        <div class="card_articles">
            <div class="article_title">Nom : <?= $livreur["livreurName"] ?></div>
            <div class="article_content">Tel : <?= $livreur["livreurPhone"] ?></div>
            <div class="article_content">Mail: <?= $livreur["livreurEmail"] ?></div>
            <div>
                <a href="indexAdmin.php?action=selectLivreur&id=<?= $livreur['id'] ?>">update livreur</a>
                <a href="indexAdmin.php?action=deleteLivreur&id=<?= $livreur['id'] ?>">supprimer ce livreur</a>
            </div>
        </div>

    <?php   } ?>

</section>

<div class="newOne">
    <h2>Ajouter un nouveau livreur</h2>

    <form action="indexAdmin.php?action=addLivreur" method="POST">

        <label for="livreurName">Nom du livreur :</label>
        <input type="text" id="livreurName" name="livreurName">

        <label for="livreurPhone">téléphone du livreur :</label>
        <input type="text" id="livreurPhone" name="livreurPhone">

        <label for="livreurEmail">mail du livreur :</label>
        <input type="text" id="livreurEmail" name="livreurEmail">


        <div>
            <button type="submit" data-dismiss="modal">Créer</button>
        </div>

    </form>
    
</div>

<?php $content = ob_get_clean()?>
<?php require 'templates/template.php'?>