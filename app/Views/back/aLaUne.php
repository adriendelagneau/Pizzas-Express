<?php ob_start(); ?>

<h1>gestion a la une</h1>

<section class="slider">
            <?php foreach($allALaUne as $aLaUne){ ?>

                <div class="card_articles">

                    <p><?= $aLaUne["title"] ?></p>                   
                    <img src="<?= $aLaUne["imgAdress"] ?>" alt="<?= $aLaUne['title'] ?>"> 
                    <button class="btn_gestion">
                        <a class="btn_delete" href="indexAdmin.php?action=deleteALaUne&id=<?= $aLaUne['id'] ?>"> supprimer cette image</a>
                </button><br>                
                </div>    
                          
            <?php   } ?>          
</section>

<section>
    <div class="newImg">
        <h2>Creer une image</h2>
        <p>taille : 254px * 154px</p>
        <form action="indexAdmin.php?action=creatALaUne" method="post" enctype="multipart/form-data" class="formImg">

        <div class="images_tiltle">
            <label for="title">Titre SEO de votre image</label>
            <input type="text" id="title" name="title">
           
        </div>
        <div class="images_tiltle">
        <input type="file" name="fileToUpload" class="filesImg">
        <br><br>
           
        </div>
        <div class="sub_btn">
            <input type="submit" value="ENVOYER"  id="upload" class="submit">
        </div>
        </form>
    </div>
</section>

<?php $content = ob_get_clean(); ?>
<!--ob_get_clean — Lit le contenu courant du tampon de sortie puis l'efface-->
<?php require 'templates/template.php'; ?>
