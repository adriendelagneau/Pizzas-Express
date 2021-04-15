<?php $allALaUne->fetch() ?>
<h2>pizzas à la une</h2>
    <?php foreach($allALaUne as $aLaUne){ ?>
        <div class="card_articles">
            <p><?= $aLaUne["title"] ?></p>
            <img src="<?= $aLaUne["imgAdress"] ?>" alt="<?= $aLaUne['title'] ?>">
        </div>
    <?php   } ?>