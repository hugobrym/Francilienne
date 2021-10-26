<?php
session_start();  // démarrage d'une session

// on vérifie que les variables de session identifiant l'utilisateur existent
if (isset($_SESSION['nom']) && isset($_SESSION['mdp'])) {
    $login = $_SESSION['nom'];
    $mdp = $_SESSION['mdp'];
}
?>

<!doctype html>
<html>
    <head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Simple Responsive Admin</title>
  <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
        <title>Accueil du site</title>

  <div id="wrapper">
       <div class="navbar navbar-inverse navbar-fixed-top">
          <div class="adjust-nav">
              <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="#">
                      <img src="assets/img/logo.png" />

                  </a>

              </div>

          </div>
      </div>

    </head>
    <body>
        <?php
        if (isset($login) && isset($mdp)) {?>
        <a href="deconnexion.php">Déconnexion</a><?
        }
        else { ?>
           <p>L'accès à cette page est réservé aux utilisateurs authentifiés</p>
           <p><a href="vue/vue_login.php">Se connecter</a></p>
        <?php } ?>

    </body>
</html>
