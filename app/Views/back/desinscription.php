<?php ob_start();?>

<h1>Supprimer votr compte</h1>

<div id="supUser">

   <p>Etes vous sur de vouloir vous désinscrire, toutes vos informations seront définitivement supprimées.</p>
   <p>Si oui cliquez ci dessous</p>

   <form action="indexAdmin.php?action=deleteUser" method="post">
      <input type="submit" value="me desinscrire">
   </form>
</div>

<?php $content = ob_get_clean()?>
<?php require 'templates/templateUser.php'?>