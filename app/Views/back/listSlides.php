<?php ob_start(); ?>
<h1>gestion slider</h1>
<section>
    <?php foreach($allSlides as $slides){ ?>

    <div class="card_articles">
        <p><?= $slides["title"] ?></p>
        <p><img src="<?= $slides["imgAdress"] ?>" alt="<?= $slides['title'] ?>"></p>
        <button class="btn_gestion">
            <a class="btn_delete" href="indexAdmin.php?action=deleteSlide&id=<?= $slides['id'] ?>"> supprimer cette
                slide</a>
        </button>
    </div>

    <?php   } ?>
</section>
<div class="newOne">
    <h3>Creer une image</h3>
    <p>taille de l image : 666px * 333px (respecter les dimensions)</p>
    <form action="indexAdmin.php?action=creatSlide" method="post" enctype="multipart/form-data" class="formImg">
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
<?php require 'templates/template.php'; ?>
</section>