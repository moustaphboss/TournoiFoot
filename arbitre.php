<!DOCTYPE html>
<?php session_start(); ?>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>Espace administrateur</title>
  </head>
  <body>
    <h1>Bienvenue dans votre espace personnel !! <?php echo $_SESSION['prenom']; ?></h1>
  </body>
</html>
