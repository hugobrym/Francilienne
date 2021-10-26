
<table class="table table-bordered">
<thead>
<tr>
    <th scope="col" >ID</th>
    <th scope="col" >Compétences</th>
    <th scope="col" >Poste </th>
    <th scope="col" >Ancienneté</th>
    <th scope="col" > Nom </th>
    <th scope="col" >Prénom </th>
    <th scope="col" >Adresse </th>
    <th scope="col" >Code Postal</th>
    <th scope="col" >Ville</th>
    <th scope="col" >Email</th>
    <th scope="col" >Mot de Passe</th>
</tr>
</thead>
<?php
  if(isset($lesMetreurs)) {
foreach ($lesMetreurs as $unMetreur)
{
    echo "<tr> <td>".$unMetreur['idpersonne']."</td>
              <td>".$unMetreur['competences']."</td>
               <td>".$unMetreur['poste']."</td>
               <td>".$unMetreur['anciennete']."</td>
               <td>".$unMetreur['nom']."</td>
               <td>".$unMetreur['prenom']."</td>
               <td>".$unMetreur['adresse']."</td>
               <td>".$unMetreur['cp']."</td>
               <td>".$unMetreur['ville']."</td>
               <td>".$unMetreur['email']."</td>
               <td>".$unMetreur['mdp']."</td>
               
               
               </tr>";
    }
  }
?>
</table>

