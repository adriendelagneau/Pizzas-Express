<?php ob_start(); ?>
<main class="pizzas">
    <h1>Pizzas</h1>
    <div class="categories">
        <p><a href="index.php?action=pizzas">toutes</a></p>
        <p><a href="index.php?action=veg&isVeg=on">veg</a></p>
        <p><a href="index.php?action=pigless&isPigless=on">sans porc </a></p>
    </div>
    <div class="size_price">
        <p>20cm</p>
        <p>30cm</p>
    </div>
    <section>

        <?php foreach($allPizzas as $pizzas) { ?>
        <article>
            <div class="line"></div>
            <div class="article_info">
                <p class="article_title"><?= $pizzas["productName"] ?></p>
                <div class="article_price">
                    <p><?= $pizzas["prixMoyenne"] ?> €</p>
                    <p><?= $pizzas["prixLarge"] ?> €</p>
                </div>
            </div>
            <p class="article_content"><?= $pizzas["productDescription"] ?></p>
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