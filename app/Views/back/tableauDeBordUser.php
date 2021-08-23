<?php ob_start(); ?>

<h1>Tableau de bord de  <?php echo $_SESSION["userFirstname"] ?></h1>

<div class="tdb">

    <div><a href="indexAdmin.php?action=infosUser">gerrer vos infos</a></div>
    <div><a href="indexAdmin.php?action=changeMdp">modifier votre mdp</a></div>
    <div><a href="indexAdmin.php?action=orderList">historique de vos commandes </a></div>
    <div><a href="indexAdmin.php?action=desinscription">desinscription</a></div>
  
</div>

<?php $content = ob_get_clean(); ?>
<?php require 'templates/templateUser.php'; ?>