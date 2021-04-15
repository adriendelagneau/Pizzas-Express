<?php ob_start();?>
<main class="pizzas">
    <h1> Liste des Emails</h1>
    <section>
        <div class="article_about">
            <div class="all-articles">
                <?php foreach($allEmails as $email){ ?>

                <div class="card_articles">
                    <div class="card_title">Nom : <?= $email["firstname"] ?></div>
                    <div class="card_content">Prénom : <?= $email["lastname"] ?></div>
                    <div class="card_content">Adresse : <?= $email["adress"] ?></div>
                    <div class="card_content">Email : <?= $email["mail"] ?></div>
                    <div class="card_content">Sujet : <?= $email["sujet"] ?></div>
                    <div class="card_content">Contenue :<?= $email["content"] ?></div>
                    <button class="btn_gestion">
                        <a class="btn_delete" href="indexAdmin.php?action=deleteEmail&id=<?= $email['id'] ?>"> supprimer
                            cette pizzas</a>
                    </button><br>
                </div>

                <?php   } ?>
            </div>
        </div>
    </section>
</main>
<?php $content = ob_get_clean()?>
<?php require 'templates/template.php'?>