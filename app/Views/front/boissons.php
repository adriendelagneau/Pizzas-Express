<?php ob_start(); ?>
<main class="boissons">
    <h1>boissons</h1>
    <div class="categories">
        <p><a href="index.php?action=boissons">toutes</a></p>
        <p><a href="index.php?action=alcool&isAlcool=on">alcool</a></p>
        <p><a href="index.php?action=alcool&isAlcool=">sans alcool </a></p>
    </div>
    <section>
        <?php foreach($allBoissons as $boissons) { ?>

        <article>
            <div class="article_info">
                <p class="article_title"><?= $boissons["productName"] ?></p>            
                <p class="article_price"><?= $boissons["prix"] ?> €</p>           
            </div>
            <p class="article_content"><?= $boissons["productDescription"] ?></p>
            <div class="line"></div>
        </article>
        <?php   } ?>

    </section>
</main>
<aside>
    <h2>A la une</h2>

    <?php foreach($allALaUne as $aLaUne){ ?>
    <article class="article_show_on_on">
        <p><?= $aLaUne["title"] ?></p>
        <p> <img src="<?= $aLaUne["imgAdress"] ?>" alt="<?= $aLaUne['title'] ?>"> </p>
    </article>
    <?php   } ?>
    
</aside>
<?php $content = ob_get_clean(); ?>
<?php require "templates/template.php"; ?>