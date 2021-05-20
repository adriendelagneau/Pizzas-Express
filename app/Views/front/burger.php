<?php ob_start(); ?>
<main class="burger">
    <h1>burger</h1>
    <section>

        <?php foreach($allBurgers as $burgers) { ?>
        <article>
            <diV class="menu_name">
                <p class="card_title"><?= $burgers["productName"] ?></p>
                <div class="menu_price">
                    <p><?= $burgers["prix"] ?> €</p>
                </div>
            </diV>
            <p class="card_content"><?= $burgers["productDescription"] ?></p>
            <div id="line"></div>
        </article>
        <?php   } ?>

    </section>
</main>
<aside>
    <h2>A la une</h2>
    <section>
    
    <?php foreach($allALaUne as $aLaUne){ ?>
    <article class="card_show_on">
        <p><?= $aLaUne["title"] ?></p>
        <p> <img src="<?= $aLaUne["imgAdress"] ?>" alt="<?= $aLaUne['title'] ?>"> </p>
    </article>
    <?php   } ?>
    
    </section>
</aside>
<?php $content = ob_get_clean(); ?>
<?php require "templates/template.php"; ?>