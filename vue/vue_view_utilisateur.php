<table class="table table-bordered">
<thead>
<tr>
    <th scope="col" >ID </th>
    <th scope="col" >Nom Utilisateur</th>
    <th scope="col" >Nombre de dossier</th>
</thead>
<?php
  if(isset($LesVUtil)) {
foreach ($LesVUtil as $uneVUtil)
{
    echo "<tr> <td>".$uneVUtil['id']."</td>
               <td>".$uneVUtil['utilisateur']."</td>
               <td>".$uneVUtil['nbrDossier']."</td>
               </tr>";
    }
  }
?>
</table>
