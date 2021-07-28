<?php ob_start(); ?>
<h1>Tableau de bord user :</h1>
<div id="tdb2">
   
</div>
<?php $content = ob_get_clean(); ?>
<?php require 'templates/template.php'; ?>