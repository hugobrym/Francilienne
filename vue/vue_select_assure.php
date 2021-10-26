<table class="table table-bordered">
<thead>
<tr>
    <th scope="col" >ID</th>
    <th scope="col" >Num Secu</th>
    <th scope="col" >Tel Portable</th>
    <th scope="col" >Nom</th>
    <th scope="col" >Prénom </th>
    <th scope="col" >Adresse</th>
    <th scope="col" >Code Postal</th>
    <th scope="col" >Ville</th>
    <th scope="col" >Email</th>
    <th scope="col" >Mot de Passe</th>
</tr>
</thead>
<?php
  if(isset($s)) {
foreach ($lesAssures as $unAssure)
{
    echo "<tr> <td>".$unAssure['idpersonne']."</td>
              <td>".$unAssure['numsecu']."</td>
               <td>".$unAssure['tel']."</td>
               <td>".$unAssure['nom']."</td>
               <td>".$unAssure['prenom']."</td>
               <td>".$unAssure['adresse']."</td>
               <td>".$unAssure['cp']."</td>
               <td>".$unAssure['ville']."</td>
               <td>".$unAssure['email']."</td>
               <td>".$unAssure['mdp']."</td>
               
               
               </tr>";
    }
  }
?>
</table>

