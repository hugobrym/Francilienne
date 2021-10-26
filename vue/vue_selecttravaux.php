<table class="table table-bordered">
<thead>
<tr>
    <th scope="col" >ID Travaux</th>
    <th scope="col" >ID du dossier</th>
    <th scope="col" >Date Début </th>
    <th scope="col" >Date Fin</th>
</thead>
<?php
  if(isset($LesTravaux)) {
foreach ($LesTravaux as $unTravaux)
{
    echo "<tr> <td>".$unTravaux['idTra']."</td>
               <td>".$unTravaux['referenceD']."</td>
               <td>".$unTravaux['DateDeb']."</td>
               <td>".$unTravaux['DateFin']."</td>

               </tr>";
    }
  }
?>
</table>



