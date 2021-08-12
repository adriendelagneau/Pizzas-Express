<?php ob_start(); ?>

<h1>gestion images à la une</h1>
<section>

    <?php foreach($allALaUne as $aLaUne){ ?>

        <div class="card_articles">
            <p><?= $aLaUne["title"] ?></p>
            <p><img src="<?= $aLaUne["imgAdress"] ?>" alt="<?= $aLaUne['title'] ?>"> </p>
            <a href="indexAdmin.php?action=deleteALaUne&id=<?= $aLaUne['id'] ?>"> supprimer cette image</a>
        </div>

    <?php   } ?>

</section>

<div class="newOne">

    <h2>Créer une image</h2>
    <p>Taille : 254px * 154px (respecter les dimensions)</p>

    <form action="indexAdmin.php?action=creatALaUne" method="post" enctype="multipart/form-data" class="formImg">

        <div>
            <label for="title">Titre SEO de votre image</label>
            <input type="text" id="title" name="title">
        </div>

        <div>
            <input type="file" name="fileToUpload" class="filesImg">
        </div>

        <div>
            <input type="submit" value="ENVOYER" id="upload" class="submit">
        </div>

    </form>

</div>

<?php $content = ob_get_clean(); ?>
<?php require 'templates/template.php'; ?>