<?php ob_start(); ?>
<main class="boissons">
    <h1>boissons</h1>
    <div class="cat">
        <p><a href="index.php?action=boissons">toutes</a></p>
        <p><a href="index.php?action=alcool&isAlcool=on">alcool</a></p>
        <p><a href="index.php?action=alcool&isAlcool=">sans alcool </a></p>
    </div>
    <?php foreach($allBoissons as $boissons) { ?>

    <div class="menu_name">
        <p class="card_title"><?= $boissons["productName"] ?></p>
        <div class="menu_price">
            <p><?= $boissons["prix"] ?> €</p>
        </div>
    </div>
    <p class="card_content"><?= $boissons["productDescription"] ?></p>
    <div id="line"></div>

    <?php   } ?>
</main>
<aside>
    <h2>pizzas à la une</h2>
    <?php foreach($allALaUne as $aLaUne){ ?>

    <div class="card_articles">
        <p><?= $aLaUne["title"] ?></p>
        <p> <img src="<?= $aLaUne["imgAdress"] ?>" alt="<?= $aLaUne['title'] ?>"> </p>
    </div>

    <?php   } ?>
</aside>
<?php $content = ob_get_clean(); ?>
<?php require "templates/template.php"; ?>