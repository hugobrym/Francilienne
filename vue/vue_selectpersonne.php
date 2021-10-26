<table border=1>
<tr><td> ID  </td><td> Nom </td><td> Prénom </td> <td> Adresse </td> <td> Code Postal </td><td> Ville </td><td> Email </td><td> Mot de Passe </td><td> Tel Portable </td></tr>
<?php
  if(isset($lesPersonnes)) {
foreach ($lesPersonnes as $unePersonne)
{
    echo "<tr> <td>".$unePersonne['idpersonne']."</td>
               <td>".$unePersonne['nom']."</td>
               <td>".$unePersonne['prenom']."</td>
               <td>".$unePersonne['adresse']."</td>
               <td>".$unePersonne['cp']."</td>
               <td>".$unePersonne['ville']."</td>
               <td>".$unePersonne['email']."</td>
               <td>".$unePersonne['mdp']."</td>
               <td>".$unePersonne['tel']."</td>

               </tr>";
    }
  }
?>
</table>
