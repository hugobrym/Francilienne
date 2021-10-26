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
    <meta charset="utf-8">
  </head>
  <body>
    <center>
      <?php
      if (isset($login) && isset($mdp)) {

          ?>
      <h1> Gestion des Utilisateurs </h1>




      <h3> Liste des Utilisateurs </h3>
      <?php
      $unControleur = new Controleur ("localhost","MLR1","root","");
$LesUtilisateur= $unControleur->selectAllUtilisateur();
          include ("vue/vue_selectutilisateur.php");


        include ("vue/vue_insertutilisateur.php");
          if(isset($_POST['Nouveau']))
          {

            $unControleur->insertUtilisateur($_POST);

          }
        }
        else { ?>
           <p>L'accès à cette page est réservé aux utilisateurs authentifiés</p>
           <p><a href="vue/vue_login.php">Se connecter</a></p>
        <?php } ?>
