<?php ob_start();?>

<h1> Liste des pizzas</h1>

<section >
    <?php foreach($allPizzas as $pizza){ ?>

        <div class="card_articles">

            <div class="article_title">Nom : <?= $pizza["productName"] ?></div>
            <div class="article_content">Ingrédients : <?= $pizza["productDescription"] ?></div>
            <div class="article_content">Prix M : <?= $pizza["prixMoyenne"] ?>€</div>
            <div class="article_content">Prix L : <?= $pizza["prixLarge"] ?>€</div>

           <div class=btn_a>
                <form action="indexAdmin.php?action=selectPizza&id=<?= $pizza['id'] ?>" method="post">
                    <input type="submit" value="mofifier">
                </form>
                <form action="indexAdmin.php?action=deletePizzas&id=<?= $pizza['id'] ?>"method="post">
                    <input type="submit" value="supprimer">
                </form>
            </div>

        </div>

    <?php   } ?>
</section>

<div class="newOne">
    <h2>Créer votre nouvelle pizzas</h2>

    <form action="indexAdmin.php?action=addPizzas" method="POST">

        <label for="productName">Nom de la pizza :</label>
        <input type="text" id="productName" name="productName">

        <label for="productDescription">Ingrédients :</label>
        <textarea name="productDescription" id="productDescription" cols="30" rows="10"></textarea>

        <label for="prixMoyenne">Prix medium :</label>
        <input type="number" id="prixMoyenne" name="prixMoyenne">

        <label for="prixLarge">Prix large :</label>
        <input type="number" id="prixLarge" name="prixLarge">

        <div>
            <label for="isVeg">VEG</label>
            <input type="checkbox" id="isVeg" name="isVeg">
        </div>
        <div>
            <label for="isPigless">SANS PORC</label>
            <input type="checkbox" id="isPigless" name="isPigless">
        </div>
        <div>
            <button type="submit" data-dismiss="modal">Créer</button>
        </div>

    </form>

</div>

<?php $content = ob_get_clean()?>
<?php require 'templates/template.php'?>