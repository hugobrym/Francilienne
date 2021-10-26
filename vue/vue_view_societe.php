<table class="table table-bordered">
<thead>
<tr>
    <th scope="col" >ID </th>
    <th scope="col" >Nom Société</th>
    <th scope="col" >Nombre de dossier</th>
</thead>
<?php
  if(isset($LesVSocietes)) {
foreach ($LesVSocietes as $uneVSociete)
{
    echo "<tr> <td>".$uneVSociete['id']."</td>
               <td>".$uneVSociete['nomsociete']."</td>
               <td>".$uneVSociete['nbdossier']."</td>
               </tr>";
    }
  }
?>
</table>
