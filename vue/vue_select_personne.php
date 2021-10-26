<table class="table table-bordered">
<thead>
<tr>
    <th scope="col" >ID</th>
    <th scope="col" >Nom</th>
    <th scope="col" >Prénom </th>
    <th scope="col" >Adresse</th>
    <th scope="col" >Code Postal</th>
    <th scope="col" >Ville</th>
    <th scope="col" >Email</th>
    <th scope="col" >Mot de Passe</th>
    <th scope="col" >Tel Portable</th>
</tr>
</thead>
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


