<?php ob_start();?>

    <h1> Liste des Reducs</h1>
    <section>
        <div class="article_about">
            <div class="all-articles">
                <?php foreach($allReducs as $reducs){ ?>

                <div class="card_articles">
                    <div class="card_title">Titre :<?= $reducs["title"] ?></div>
                    <div class="card_content">Période :<?= $reducs["periode"] ?></div>
                    <div class="card_content">Condition 1 :<?= $reducs["condition1"] ?></div>
                    <div class="card_content">Condition 2 :<?= $reducs["condition2"] ?></div>
                    <div class="card_content">Validité : <?= $reducs["validite"] ?></div>
                   <div> <button>
                        <a class="btn_update" href="indexAdmin.php?action=selectReduc&id=<?= $reducs['id'] ?>"> update
                            article</a>
                    </button>
                    <button class="btn_gestion">
                        <a class="btn_delete" href="indexAdmin.php?action=deleteReduc&id=<?= $reducs['id'] ?>">
                            supprimer
                            cette boisson</a>
                    </button>
                </div>
                </div>

                <?php   } ?>
            </div>
        </div>
    </section>
   
        <div >
            <h2>Créez votre reduction</h2>
            <form action="indexAdmin.php?action=addReduc" method="POST">

                <label for="title">Nom de la reduction :</label>
                <input type="text" id="title" name="title">

                <label for="periode">Periode : </label>
                <textarea name="periode" id="periode" cols="30" rows="1"></textarea>

                <label for="condition1">condition1 :</label>
                <textarea name="condition1" id="condition1" cols="30" rows="1"></textarea>

                <label for="condition2">condition2 :</label>
                <textarea name="condition2" id="condition2" cols="30" rows="1"></textarea>

                <label for="validite">validite :</label>
                <textarea name="validite" id="validite" cols="30" rows="1"></textarea>

                <div class="subBtn">
                    <button type="submit" class="btn bt-secondary" data-dismiss="modal">Creer</button>
                </div>

            </form>
        </div>
    

<?php $content = ob_get_clean()?>
<?php require 'templates/template.php'?>