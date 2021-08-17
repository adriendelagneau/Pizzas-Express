<?php ob_start();?>

<section>
    <div class="newOne">
        <h4>update livreur</h4>
        <?php $livreur = $selectedLivreur->fetch() ?>

        <div>
            <h2><?= $livreur['livreurName'] ?></h2>

            <form action="indexAdmin.php?action=updateLivreur&id=<?= $livreur['id'] ?>" method="POST">

                <label for="livreurName">Nom de la boisson</label>
                <input type="text" id="livreurName" name="livreurName" value="<?= $livreur['livreurName'] ?>">

                <label for="livreurPhone">Nom de la boisson</label>
                <input type="text" id="livreurPhone" name="livreurPhone" value="<?= $livreur['livreurPhone'] ?>">
                
                <label for="livreurEmail">Nom de la boisson</label>
                <input type="email" id="livreurEmail" name="livreurEmail" value="<?= $livreur['livreurEmail'] ?>">

                <div>
                    <button type="submit" data-dismiss="modal">Modifier</button>
                </div>

            </form>
            
        </div>
        
    </div>
</section>

<?php $content = ob_get_clean()?>
<?php require 'templates/template.php'?>