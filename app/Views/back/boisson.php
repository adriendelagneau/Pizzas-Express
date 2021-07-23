<?php ob_start();?>
<section>
    <div class="newOne">
        <h4>update boisson</h4>
        <?php $boisson = $selectedBoisson->fetch() ?>
        <div>
            <h2><?= $boisson['productName'] ?></h2>
            <form action="indexAdmin.php?action=updateBoisson&id=<?= $boisson['id'] ?>" method="POST">
                <label for="productName">Nom de la boisson</label>
                <input type="text" id="productName" name="productName" value="<?= $boisson['productName'] ?>">
                <label for="productDescription">Description : </label>
                <textarea name="productDescription" id="productDescription" cols="30"
                    rows="10"><?= $boisson['productDescription'] ?></textarea>
                <label for="prix">prix </label>
                <input type="number" id="prix" name="prix" value="<?= $boisson['prix'] ?>">
                <div>
                    <label for="isAlcool">Alcool</label>
                    <input type="checkbox" id="isAlcool" name="isAlcool">
                </div>
                <div>
                    <button type="submit" data-dismiss="modal">Modifier</button>
                </div>
            </form>
        </div>
    </div>
</section>
<?php $content = ob_get_clean()?>
<?php require 'templates/template.php'?>