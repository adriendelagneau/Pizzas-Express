<?php ob_start();?>

<section>
    <h4>update reducs</h4>
    <?php $reduc = $selectedReduc->fetch() ?>

    <div>
        <h2><?= $reduc['title'] ?></h2>

        <form action="indexAdmin.php?action=updateReduc&id=<?= $reduc['id'] ?>" method="POST">

            <label for="title">Nom de la reduc</label>
            <input type="text" id="title" name="title" value="<?= $reduc["title"] ?>">

            <label for="periode">periode</label>
            <textarea name="periode" id="periode" cols="30" rows="1"><?= $reduc["periode"] ?></textarea>

            <label for="condition1">Condition1</label>
            <textarea name="condition1" id="condition1" cols="30" rows="1"><?= $reduc["condition1"] ?></textarea>

            <label for="condition2">Condition2</label>
            <textarea name="condition2" id="condition2" cols="30" rows="1"><?= $reduc["condition2"] ?></textarea>

            <label for="validite">Validite</label>
            <textarea name="validite" id="validite" cols="30" rows="1"><?= $reduc["validite"] ?></textarea>

            <div>
                <button type="submit" data-dismiss="modal">Modifier</button>
            </div>

        </form>

    </div>
</section>

<?php $content = ob_get_clean()?>
<?php require 'templates/template.php'?>