<table border=1>
<tr><td> ID Utilisateur  </td><td> Poste </td><td> Ancienneté </td> <td> Nom </td><td> Code Postal </td> <td> Ville </td><td> Email </td><td> Mot de passe </td></tr>
<?php
  if(isset($LesUtilisateur)) {
foreach ($LesUtilisateur as $unUtilisateur)
{
    echo "<tr> <td>".$unUtilisateur['idpersonne']."</td>
               <td>".$unUtilisateur['poste']."</td>
               <td>".$unUtilisateur['anciennete']."</td>
               <td>".$unUtilisateur['nom']."</td>
               <td>".$unUtilisateur['cp']."</td>
               <td>".$unUtilisateur['ville']."</td>
               <td>".$unUtilisateur['email']."</td>
               <td>".$unUtilisateur['mdp']."</td>

               </tr>";
    }
  }
?>
</table>
