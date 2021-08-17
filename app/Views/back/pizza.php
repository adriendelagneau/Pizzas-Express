<?php ob_start();?>

<section>
    <div class="newOne">
        <h4>update pizza</h4>
        <?php $pizza = $selectedPizza->fetch() ?>

        <div>
            <h2><?= $pizza['productName'] ?></h2>
            <form action="indexAdmin.php?action=updatePizza&id=<?= $pizza['id'] ?>" method="POST">

                <label for="productName">Nom de la pizza : </label>
                <input type="text" id="productName" name="productName" value="<?= $pizza['productName'] ?>">

                <label for="productDescription">Ingrédients :</label>
                <textarea name="productDescription" id="productDescription" cols="30"
                    rows="10"><?= $pizza['productDescription'] ?></textarea>
                
                <label for="prixMoyenne">prix medium : </label>
                <input type="number" id="prixMoyenne" name="prixMoyenne" value="<?= $pizza['prixMoyenne'] ?>">

                <label for="prixLarge">prix large : </label>
                <input type="number" id="prixLarge" name="prixLarge" value="<?= $pizza['prixLarge'] ?>">

                <div>
                    <button type="submit" data-dismiss="modal">Modifier</button>
                </div>
                <div>
                    <label for="isVeg">VEG</label>
                    <input type="checkbox" id="isVeg" name="isVeg">
                </div>
                <div>
                    <lablel for="isPigless">SANS PORC</lablel>
                    <input type="checkbox" id="isPigless" name="isPigless">
                </div>

            </form>
        </div>

    </div>
</section>

<?php $content = ob_get_clean()?>
<?php require 'templates/template.php'?>