<table class="table table-bordered">
<thead>
<tr>
    <th scope="col" >ID </th>
    <th scope="col" >Nom Metreur</th>
    <th scope="col" >Nombre de dossier</th>
</thead>
<?php
  if(isset($LesVMetreurs)) {
foreach ($LesVMetreurs as $uneVMetreur)
{
    echo "<tr> <td>".$uneVMetreur['id']."</td>
               <td>".$uneVMetreur['nommetreur']."</td>
               <td>".$uneVMetreur['ndrdv']."</td>
               </tr>";
    }
  }
?>
</table>
