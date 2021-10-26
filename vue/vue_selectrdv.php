<table class="table table-bordered">
<thead>
<tr>
    <th scope="col" >ID du RDV</th>
    <th scope="col" >ID du dossier</th>
    <th scope="col" > ID utilisateur </th>
    <th scope="col" >Date RDV</th>
    <th scope="col" >Heure RDV</th>
    <th scope="col" > Lieu RDV </th>
    <th scope="col" >Rapport</th>

</thead>
<?php
  if(isset($LesRDV)) {
foreach ($LesRDV as $unRDV)
{
    echo "<tr> <td>".$unRDV['idRDV']."</td>
               <td>".$unRDV['referenceD']."</td>
               <td>".$unRDV['idpersonne']."</td>
               <td>".$unRDV['dateRDV']."</td>
               <td>".$unRDV['heureRdv']."</td>
               <td>".$unRDV['LieuRdv']."</td>
               <td>".$unRDV['Rapport']."</td>

               </tr>";
    }
  }
?>
</table>

