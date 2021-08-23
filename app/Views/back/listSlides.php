<?php ob_start(); ?>

<h1>Gestion slider</h1>

<section class="slides">
    <?php foreach($allSlides as $slides){ ?>

    <div class="card_articles">
    
        <p><?= $slides["title"] ?></p>
        <p><img src="<?= $slides["imgAdress"] ?>" alt="<?= $slides['title'] ?>"></p>

        <form action="indexAdmin.php?action=deleteSlide&id=<?= $slides['id'] ?>"method="post">
            <input type="submit" value="supprimer" class="btn_sup">
        </form>
            
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
