<?php
    require_once ("controleur/controleur.php");
    session_start();  // démarrage d'une session

    // on vérifie que les variables de session identifiant l'utilisateur existent
    if (isset($_SESSION['nom']) && isset($_SESSION['mdp'])) {
        $login = $_SESSION['nom'];
        $mdp = $_SESSION['mdp'];
    }
    ?>

<html>
  <head>
    <title> Gestion de Francilienne de Peinture </title>
    <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

<!-- BOOTSTRAP STYLES-->
  <link href="assets/css/bootstrap.css" rel="stylesheet" />
   <!-- FONTAWESOME STYLES-->
  <link href="assets/css/font-awesome.css" rel="stylesheet" />
      <!-- CUSTOM STYLES-->
  <link href="assets/css/custom.css" rel="stylesheet" />
   <!-- GOOGLE FONTS-->
 <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
  </head>
  <body>
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
                          <img src="assets/img/lo.png" />

                      </a>

                  </div>
              </div>
          </div>
    <center>
      <?php
      if (isset($login) && isset($mdp)) {

          ?>
            <div class="adjust-nav">
          <span class="logout-spn" >
            <a href="deconnexion.php" style="color:#fff;">Déconnexion</a>

          </span>
        </div>
                <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
                    <div class="sidebar-collapse">
                        <ul class="nav" id="main-menu">



                            <li class="active-link">
                                <a href="accueil.php" ><i class="fa fa-desktop "></i>Accueil </a>
                            </li>


                            <li>
                                <a href="Devis.php"><i class="fa fa-table "></i>Devis  </a>
                            </li>
                            <li>
                                <a href="société.php"><i class="fa fa-edit "></i>Société </a>
                            </li>


                            <li>
                                <a href="assuré.php"><i class="fa fa-qrcode "></i>Assuré</a>
                            </li>
                            <li>
                                <a href="metreur.php"><i class="fa fa-bar-chart-o"></i>Metreur</a>
                            </li>

                            <li>
                                <a href="suivi.php"><i class="fa fa-edit "></i>Suivi </a>
                            </li>
                            <li>
                                <a href="dossier.php"><i class="fa fa-table "></i>Dossier</a>
                            </li>
                             <li>
                                <a href="travaux.php"><i class="fa fa-edit "></i>Travaux </a>
                            </li>
                            <li>
                                <a href="rdv.php"><i class="fa fa-edit "></i>RDV </a>
                            </li>
                            <li>
                                <a href="facture.php"><i class="fa fa-qrcode "></i>Facture</a>
                            </li>
                            <li>
                                <a href="stats.php"><i class="fa fa-qrcode "></i>Statistiques</a>
                            </li>
                            <li>
                                <a href="deconnexion.php"><i class="fa fa-qrcode "></i>Déconnexion</a>
                            </li>

                        </ul>
                                    </div>

                </nav>

                <div id="page-wrapper" >
                    <div id="page-inner">
          <br>  <h1> Gestion de Dossier </h1>

      


      <h3> Liste des Factures </h3>
      <li>
                                <a href="facture_inscription.php">Ajout Factures</a>
                            </li>
      <?php
      $unControleur = new Controleur ("localhost","MLR1","root","");

 $LesFacture= $unControleur->selectAllFacture();
          include ("vue/vue_selectfacture.php");


          

      include("vue/vue_delete_facture.php");
      if(isset($_POST['effacer']))
      {

        $unControleur->deleteFacture($_POST['idFact']);

      }
       }
      else { ?>
         <p>L'accès à cette page est réservé aux utilisateurs authentifiés</p>
         <p><a href="vue/vue_login.php">Se connecter</a></p>
      <?php } ?>
</div>
             <!-- /. PAGE INNER  -->
            </div>
    </center>
  </body>
</html>

