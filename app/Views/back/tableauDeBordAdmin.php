<?php ob_start(); ?>
<h1>Tableau de bord : <?php echo($_SESSION['pseudo']);?></h1>
<div class="tdb">
    <div><a href="indexAdmin.php?action=listSlides">gestion images slider</a></div>
    <div><a href="indexAdmin.php?action=listALaUne">gestion images misent en avant</a></div>
    <div><a href="indexAdmin.php?action=tdbProducts">gestion des produits</a></div>
    <div><a href="indexAdmin.php?action=listReducs">gestion reducs</a></div>
    <div><a href="indexAdmin.php?action=listEmails">gestion Emails</a></div>
    <div><a href="indexAdmin.php?action=listUserOrder">gestion des commandes</a></div>
    <div><a href="indexAdmin.php?action=listLivreur">gestion livreur</a></div>
</div>

<?php $content = ob_get_clean(); ?>
<?php require 'templates/template.php'; ?>