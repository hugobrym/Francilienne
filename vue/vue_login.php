<!doctype html>
<html>
    <head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
        <title>Connexion</title>
    </head><div class="navbar navbar-inverse navbar-fixed-top">
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
    <body>
      <center>
        <br><br><br><h1>Connexion utilisateur</h1>
        <form action="../login_post.php" method="post">
          <table>
            <tr> <td> <label for="nom">Nom :</label></td>
          	<td>  <input type="text" name="nom" id="nom" required /></td> </tr>
            <tr> <td> <label for="mdp">Mot de passe :</label></td>
          	<td>  <input type="password" name="mdp" id="mdp" required /></td> </tr>
            <td> <td><input type="submit" value="Connexion"></td> </tr>
          </table>
        </form>
      </center>
    </body>
</html>
