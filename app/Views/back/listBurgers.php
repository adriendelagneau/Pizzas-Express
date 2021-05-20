<?php ob_start();?>
<h1> Liste des Burgers</h1>
<section>

    <?php foreach($allBurgers as $burgers){ ?>
    <div class="card_articles">
        <div class="article_title">Nom : <?= $burgers["productName"] ?></div>
        <div class="article_content">Ingrédients : <?= $burgers["productDescription"] ?></div>
        <div class="article_content">Prix : <?= $burgers["prix"] ?>€</div>
        <div> <button>
                <a href="indexAdmin.php?action=selectBurger&id=<?= $burgers['id'] ?>"> update
                    burger</a>
            </button>
            <button>
                <a href="indexAdmin.php?action=deleteBurger&id=<?= $burgers['id'] ?>">
                    supprimer
                    ce burger</a>
            </button><br>
        </div>
    </div>
    <?php   } ?>

</section>
<div class="newOne">
    <h2>Créer votre nouveau Burger </h2>
    <form action="indexAdmin.php?action=addBurger" method="POST">
        <label for="productName">Nom du burger : </label>
        <input type="text" id="productName" name="productName">
        <label for="productDescription">Ingrédients : </label>
        <textarea name="productDescription" id="productDescription" cols="30" rows="10"></textarea>
        <label for="prix">Prix : </label>
        <input type="number" id="prix" name="prix">
        <div>
            <button type="submit" data-dismiss="modal">Créer</button>
        </div>
    </form>
</div>
<?php $content = ob_get_clean()?>
<?php require 'templates/template.php'?>