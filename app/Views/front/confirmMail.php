<?php ob_start(); ?><!-- fonction pour injecter le header -->

<h1>Votre mail a ete envoyé avec succès</h1>

<?php $content = ob_get_clean(); ?>
<?php require 'templates/template.php'; ?>