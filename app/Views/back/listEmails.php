<?php ob_start();?>
<h1> Liste des Emails</h1>
<section>

    <?php foreach($allEmails as $email){ ?>
    <div class="card_articles">
        <div class="article_title">Nom : <?= $email["firstname"] ?></div>
        <div class="article_content">Prénom : <?= $email["lastname"] ?></div>
        <div class="article_content">Adresse : <?= $email["adress"] ?></div>
        <div class="article_content">Email : <?= $email["mail"] ?></div>
        <div class="article_content">Sujet : <?= $email["sujet"] ?></div>
        <div class="article_content">Contenu :<?= $email["content"] ?></div>
       
            <a href="indexAdmin.php?action=deleteEmail&id=<?= $email['id'] ?>"> supprimer
                ce mail</a>
        
    </div>
    <?php   } ?>

</section>
<?php $content = ob_get_clean()?>
<?php require 'templates/template.php'?>