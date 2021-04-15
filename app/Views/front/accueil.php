<?php ob_start(); ?>
<main class="accueil">
    <h1>pizzas express</h1>
    <ul id="slider">
        <?php foreach($allSlides as $Image){ ?>

        <li> <img src="<?= $Image["imgAdress"] ?>" alt="<?= $Image['title'] ?>"> </li>
        
        <?php   } ?>
    </ul>
    <div>
        <h3>Bienvenue</h3>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestiae blanditiis obcaecati
            impedit cupiditate
            nulla perferendis repudiandae optio dolore voluptates consectetur suscipit dolorem, dicta officia.
            Repudiandae! bla bla bla bla</p>
    </div>
    <h3> offres spéciale</h3>
    <section id="reductions">

        <?php foreach($allReducs as $reducs){ ?>

        <article>
            <h4><?= $reducs["title"] ?></h4>
            <p><?= $reducs["periode"] ?></p>
            <p><?= $reducs["condition1"] ?></p>
            <p><?= $reducs["condition2"] ?></p>
            <div>
                <p>Ofrre non cumulable</p>
                <p>Valable jusqu'au <?= $reducs["validite"] ?></p>
                <p>Sur présentation de ce coupon</p>
            </div>
        </article>

        <?php } ?>
    </section>
</main>
<aside>
    <h2>pizzas à la une</h2>
    <?php foreach($allALaUne as $aLaUne){ ?>

    <div class="card_articles">
        <p><?= $aLaUne["title"] ?></p>
        <img src="<?= $aLaUne["imgAdress"] ?>" alt="<?= $aLaUne['title'] ?>">
    </div>

    <?php   } ?>
</aside>
<?php $content = ob_get_clean(); ?>
<?php require "templates/template.php"; ?>