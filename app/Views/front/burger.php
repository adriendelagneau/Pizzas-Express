<?php ob_start(); ?>
<main class="burger">
    <h1>burger</h1>
    <section>

        <?php foreach($allBurgers as $burgers) { ?>
        <article>
            <div class="article_info">
                <p class="article_title"><?= $burgers["productName"] ?></p>
                <p class="article_price"><?= $burgers["prix"] ?> €</p>
            </div>
            <p class="article_content"><?= $burgers["productDescription"] ?></p>
            <div class="line"></div>
        </article>
        <?php   } ?>

    </section>
</main>
<aside>
    <h2>pizzas à la une</h2>
    <section>
    
    <?php foreach($allALaUne as $aLaUne){ ?>
    <article class="article_show_on_on">
        <p><?= $aLaUne["title"] ?></p>
        <p> <img src="<?= $aLaUne["imgAdress"] ?>" alt="<?= $aLaUne['title'] ?>"> </p>
    </article>
    <?php   } ?>
    
    </section>
</aside>
<?php $content = ob_get_clean(); ?>
<?php require "templates/template.php"; ?>