<?php ob_start();?>

<h1> desinscription</h1>

<div id="supUser">

   <p>êtes vous sur de vouloir vous desinscrire, toutes vos informations seront définitivement supprimées.</p>
   <p>si oui cliquez ci dessous</p>

   <form action="indexAdmin.php?action=deleteUser" method="post">
      <input type="submit" value="me desinscrire">
   </form>
</div>

<?php $content = ob_get_clean()?>
<?php require 'templates/templateUser.php'?>