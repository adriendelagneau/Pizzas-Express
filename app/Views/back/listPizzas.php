<?php ob_start();?>

<h1> Liste des pizzas</h1>
<section>
    <div class="article_about">
        <div class="all-articles">
            <?php foreach($allPizzas as $pizza){ ?>

            <div class="card_articles">
                <div class="card_title">Nom : <?= $pizza["productName"] ?></div>
                <div class="card_content">Ingrédients : <?= $pizza["productDescription"] ?></div>
                <div class="card_content">Prix M : <?= $pizza["prixMoyenne"] ?>€</div>
                <div class="card_content">Prix L : <?= $pizza["prixLarge"] ?>€</div>             
              <div>  <button>
                    <a class="btn_update" href="indexAdmin.php?action=selectPizza&id=<?= $pizza['id'] ?>"> update
                        pizza</a>
                </button>
                <button class="btn_gestion">
                    <a class="btn_delete" href="indexAdmin.php?action=deletePizzas&id=<?= $pizza['id'] ?>"> supprimer
                        cette pizza</a>
                </button>
            </div>
            </div>
            <?php   } ?>
        </div>
    </div>
</section>
    <div class="newOne">
        <h2>Créez votre nouvelle pizzas</h2>
        <form action="indexAdmin.php?action=addPizzas" method="POST">
      
            <label for="productName">Nom de la pizza :</label>
            <input type="text" id="productName" name="productName">
    
            <label for="productDescription">Ingrédients :</label>
            <textarea name="productDescription" id="productDescription" cols="30" rows="10"></textarea>
         
            <label for="prixMoyenne">prix medium :</label>
            <input type="number" id="prixMoyenne" name="prixMoyenne">
               
            <label for="prixLarge">prix large :</label>
            <input type="number" id="prixLarge" name="prixLarge">
      
            <div> 
               <label for="isVeg">VEG</label>
               <input type="checkbox" id="isVeg" name="isVeg">
            </div>   
            <div>
                <lablel for="isPigless">SANS PORC</lablel>   
               <input type="checkbox" id="isPigless" name="isPigless">
            </div>
            <div class="subBtn">
                <button type="submit" class="btn bt-secondary" data-dismiss="modal">Creer</button>
            </div>

        </form>
    </div>

<?php $content = ob_get_clean()?>
<?php require 'templates/template.php'?>