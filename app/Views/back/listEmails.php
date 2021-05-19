<?php ob_start();?>
<h1> Liste des Emails</h1>
<section>

    <?php foreach($allEmails as $email){ ?>
    <div class="card_articles">
        <div class="card_title">Nom : <?= $email["firstname"] ?></div>
        <div class="card_content">Prénom : <?= $email["lastname"] ?></div>
        <div class="card_content">Adresse : <?= $email["adress"] ?></div>
        <div class="card_content">Email : <?= $email["mail"] ?></div>
        <div class="card_content">Sujet : <?= $email["sujet"] ?></div>
        <div class="card_content">Contenu :<?= $email["content"] ?></div>
        <button class="btn_gestion">
            <a class="btn_delete" href="indexAdmin.php?action=deleteEmail&id=<?= $email['id'] ?>"> supprimer
                ce mail</a>
        </button>
    </div>
    <?php   } ?>

</section>
<?php $content = ob_get_clean()?>
<?php require 'templates/template.php'?>