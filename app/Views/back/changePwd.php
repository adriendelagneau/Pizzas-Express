<?php ob_start();?>
<h1> change pwd</h1>

<?php echo $_SESSION['userPWD']?>

<?php $content = ob_get_clean()?>
<?php require 'templates/templateUser.php'?>

