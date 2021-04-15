<?php ob_start(); ?>
<main class="burger">
    <h1>burger</h1>
    <?php foreach($allBurgers as $burgers) { ?>

    <diV class="menu_name">
        <p class="card_title"><?= $burgers["productName"] ?></p>
        <div class="menu_price">
            <p><?= $burgers["prix"] ?> €</p>
        </div>
    </diV>
    <p class="card_content"><?= $burgers["productDescription"] ?></p>
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