<?php ob_start();?>
<h1> Liste des boissons</h1>
<section>

    <?php foreach($allBoissons as $boissons){ ?>
    <div class="card_articles">
        <div class="article_title">Nom : <?= $boissons["productName"] ?></div>
        <div class="article_content">Description : <?= $boissons["productDescription"] ?></div>
        <div class="article_content">Prix : <?= $boissons["prix"] ?>€</div>
        <div>
            <button>
                <a href="indexAdmin.php?action=selectBoisson&id=<?= $boissons['id'] ?>">
                    update boisson</a>
            </button>
            <button>
                <a href="indexAdmin.php?action=deleteBoisson&id=<?= $boissons['id'] ?>">
                    supprimer cette boisson</a>
            </button>
        </div>
    </div>
    <?php   } ?>

</section>
<div class="newOne">
    <h2>Créer votre nouvelle boisson </h2>
    <form action="indexAdmin.php?action=addBoisson" method="POST">
        <label for="productName">Nom de la boisson :</label>
        <input type="text" id="productName" name="productName">
        <label for="productDescription">Description : </label>
        <textarea name="productDescription" id="productDescription" cols="30" rows="10"></textarea>
        <label for="prix">Prix :</label>
        <input type="number" id="prix" name="prix">
        <div>
            <label for="isAlcool">Alcool :</label>
            <input type="checkbox" id="isAlcool" name="isAlcool">
        </div>
        <div>
            <button type="submit" data-dismiss="modal">Créer</button>
        </div>
    </form>
</div>
<?php $content = ob_get_clean()?>
<?php require 'templates/template.php'?>