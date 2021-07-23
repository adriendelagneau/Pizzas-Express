<?php ob_start(); ?>
<h1>Tableau de bord :</h1>
<div id="tdb">
    <div><a href="indexAdmin.php?action=listPizzas">gestion pizzas</a></div>
    <div><a href="indexAdmin.php?action=listBurgers">gestion burgers</a></div>
    <div><a href="indexAdmin.php?action=listBoissons">gestion boissons</a></div>
</div>
<?php $content = ob_get_clean(); ?>
<?php require 'templates/template.php'; ?>