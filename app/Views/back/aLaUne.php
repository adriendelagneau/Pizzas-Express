<?php ob_start(); ?>

<h1>Gestion images à la une</h1>

<section class="slides">
    <?php foreach($allALaUne as $aLaUne){ ?>

    <div class="card_articles">

        <p><?= $aLaUne["title"] ?></p>
        <p><img src="<?= $aLaUne["imgAdress"] ?>" alt="<?= $aLaUne['title'] ?>"> </p>  

        <form action="indexAdmin.php?action=deleteALaUne&id=<?= $aLaUne['id'] ?>" method="post">
            <input type="submit" value="supprimer" class="btn_sup">
        </form>

    </div>
    <?php   } ?>
</section>

<div class="newOne">

    <h2>Créer une image</h2>
    <p>Taille : 254px * 154px (respecter les dimensions)</p>

    <form action="indexAdmin.php?action=creatALaUne" method="post" enctype="multipart/form-data" class="formImg">

        
            <label for="title">Titre SEO de votre image :</label>
            <input type="text" id="title" name="title">
        
            <label for="img_a_la_une_upload">Charger votre fichier :</label>
            <input type="file" name="fileToUpload"  id="img_a_la_une_upload">
       
            
            <input type="submit" value="ENVOYER" id="Btn_envoyer_1" class="submit">
        

    </form>

</div>

<?php $content = ob_get_clean(); ?>
<?php require 'templates/template.php'; ?>