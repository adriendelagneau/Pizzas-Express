<?php ob_start();?>

<h1> desinscription</h1>
   <p>êtes vous sur de vouloiir vous desinscrire, toutes vos informations seront definitivement supprimées.</p>

   <p>si oui cliquez ci dessous</p>

   <form action="indexAdmin.php?action=deleteUser" method="post">
      <input type="submit" value="me desinscrire">
   </form>

<?php $content = ob_get_clean()?>
<?php require 'templates/templateUser.php'?>