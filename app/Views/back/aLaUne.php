<?php ob_start(); ?>
<h1>gestion images à la une</h1>
<section id="show_on">

    <?php foreach($allALaUne as $aLaUne){ ?>
    <div class="card_articles">
        <p><?= $aLaUne["title"] ?></p>
        <p><img src="<?= $aLaUne["imgAdress"] ?>" alt="<?= $aLaUne['title'] ?>"> </p>
        <button class="btn_gestion">
            <a class="btn_delete" href="indexAdmin.php?action=deleteALaUne&id=<?= $aLaUne['id'] ?>"> supprimer cette
                image</a>
        </button>
    </div>
    <?php   } ?>
    
</section>
<div class="newOne">
    <h2>Créer une image</h2>
    <p>Taille : 254px * 154px (respecter les dimensions)</p>
    <form action="indexAdmin.php?action=creatALaUne" method="post" enctype="multipart/form-data" class="formImg">
        <div class="images_tiltle">
            <label for="title">Titre SEO de votre image</label>
            <input type="text" id="title" name="title">
        </div>
        <div class="images_tiltle">
            <input type="file" name="fileToUpload" class="filesImg">
        </div>
        <div class="sub_btn">
            <input type="submit" value="ENVOYER" id="upload" class="submit">
        </div>
    </form>
</div>
<?php $content = ob_get_clean(); ?>
<!--ob_get_clean — Lit le contenu courant du tampon de sortie puis l'efface-->
<?php require 'templates/template.php'; ?>