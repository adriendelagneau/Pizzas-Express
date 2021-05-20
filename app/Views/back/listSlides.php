<?php ob_start(); ?>
<h1>gestion slider</h1>
<section id="slides">

    <?php foreach($allSlides as $slides){ ?>
    <div class="card_articles">
        <p><?= $slides["title"] ?></p>
        <p><img src="<?= $slides["imgAdress"] ?>" alt="<?= $slides['title'] ?>"></p>
        <button>
            <a href="indexAdmin.php?action=deleteSlide&id=<?= $slides['id'] ?>"> supprimer cette
                slide</a>
        </button>
    </div>
    <?php   } ?>
    
</section>
<div class="newOne">
    <h3>Créer une image</h3>
    <p>Taille de l'image : 757px * 212px (respecter les dimensions)</p>
    <form action="indexAdmin.php?action=creatSlide" method="post" enctype="multipart/form-data" class="formImg">
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
</section>