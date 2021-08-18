<?php ob_start();?>

<h1>Changer le mot de passe</h1>

<form action="indexAdmin.php?action=changementMdpUser" method="post">

        <label for="ancienMdp">M.D.P : </label>
        <input type="password" placeholder="ancienMdp" name="ancienMdp" id="ancienMdp">

        <label for="nouveauMdp">NEW M.D.P : </label>
        <input type="password" placeholder="nouveauMdp" name="nouveauMdp" id="nouveauMdp">

        <label for="nouveauMdpConfirm">NEW M.D.P : </label>
        <input type="password" placeholder="confirmer votre mot de passe " name="nouveauMdpConfirm" id="nouveauMdpConfirm">


        <input type="submit" value="OK">
    
    </form>
  
<?php $content = ob_get_clean()?>
<?php require 'templates/templateUser.php'?>

