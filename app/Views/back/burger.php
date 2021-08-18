<?php ob_start();?>

<section>
    <div class="newOne">
        <h4>Modifier burgers</h4>
        <?php $burger = $selectedBurger->fetch() ?>
        <div>
            <h2><?= $burger['productName'] ?></h2>

            <form action="indexAdmin.php?action=updateBurger&id=<?= $burger['id'] ?>" method="POST">

                <label for="productName">Nom du burger : </label>
                <input type="text" id="productName" name="productName" value="<?= $burger['productName'] ?>">

                <label for="productDescription">Description : </label>
                <textarea name="productDescription" id="productDescription" cols="30"
                    rows="10"><?= $burger['productDescription'] ?></textarea>

                <label for="prix">prix </label>
                <input type="number" id="prix" name="prix" value="<?= $burger['prix'] ?>">

                <div>
                    <button type="submit" data-dismiss="modal">Modifier</button>
                </div>
                
            </form>

        </div>
    </div>
</section>

<?php $content = ob_get_clean()?>
<?php require 'templates/template.php'?>