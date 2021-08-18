<?php ob_start(); ?>

<main class="accueil">
    <h1>Pizzas express</h1>
    <ul id="slider">

        <?php foreach($allSlides as $Image){ ?>
        <li> <img src="<?= $Image["imgAdress"] ?>" alt="<?= $Image['title'] ?>"> </li>
        <?php   } ?>

    </ul>
    <h3>Bienvenue</h3>

    <p>Toutes nos pizzas et burger sont fait avec les meilleurs ingrédients, vente à emporter et livraison toute la
        semaine de 11h à 14h et de 19h à 23h.</p>
    <p>Commander au 02 97 27 12 **<p>

            <h2> Offres spéciale</h2>
            <section id="reductions">

                <?php foreach($allReducs as $reducs){ ?>

                <article>
                    <h4><?= $reducs["title"] ?></h4>
                    <p><?= $reducs["periode"] ?></p>
                    <p><?= $reducs["condition1"] ?></p>
                    <p><?= $reducs["condition2"] ?></p>
                    <p>Ofrre non cumulable</p>
                    <p>Valable jusqu'au <?= $reducs["validite"] ?></p>
                    <p>Sur présentation de ce coupon</p>
                </article>

                <?php } ?>

            </section>
</main>

<aside>
    <h2>A la une</h2>

    <?php foreach($allALaUne as $aLaUne){ ?>
    <article class="article_show_on">
        <p><?= $aLaUne["title"] ?></p>
        <p> <img src="<?= $aLaUne["imgAdress"] ?>" alt="<?= $aLaUne['title'] ?>"> </p>
    </article>
    <?php   } ?>

</aside>
<?php $content = ob_get_clean(); ?>
<?php require "templates/template.php"; ?>