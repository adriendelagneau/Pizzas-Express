<?php ob_start();?>
<h1> Liste des commandes</h1>

<?php $content = ob_get_clean()?>
<?php require 'templates/templateUser.php'?>

