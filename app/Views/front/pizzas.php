<?php ob_start(); ?>
<main class="pizzas">
    <h1>Pizzas</h1>
    <div class="categories">
        <p><a href="index.php?action=pizzas">toutes</a></p>
        <p><a href="index.php?action=veg&isVeg=on">veg</a></p>
        <p><a href="index.php?action=pigless&isPigless=on">sans porc </a></p>
    </div>
    <diV class="size_price">
        <p>20cm</p>
        <p>30cm</p>
    </diV>
    <section>

        <?php foreach($allPizzas as $pizzas) { ?>
        <article>
            <div id="line"></div>
            <diV class="menu_name">
                <p class="card_title"><?= $pizzas["productName"] ?></p>
                <div class="menu_price">
                    <p><?= $pizzas["prixMoyenne"] ?> €</p>
                    <p><?= $pizzas["prixLarge"] ?> €</p>
                </diV>
            </div>
            <p class="card_content"><?= $pizzas["productDescription"] ?></p>
        </article>
        <?php   } ?>

    </section>
</main>
<aside>
    <h2>A la une</h2>

    <?php foreach($allALaUne as $aLaUne){ ?>
    <article class="card_show_on">
        <p><?= $aLaUne["title"] ?></p>
        <p> <img src="<?= $aLaUne["imgAdress"] ?>" alt="<?= $aLaUne['title'] ?>"> </p>
    </article>
    <?php   } ?>

</aside>
<?php $content = ob_get_clean(); ?>
<?php require "templates/template.php"; ?>