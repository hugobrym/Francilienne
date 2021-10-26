<table class="table table-bordered">
<thead>
<tr>
    <th scope="col" >ID </th>
    <th scope="col" >Nom Assuré(e)</th>
    <th scope="col" >Nombre de dossier</th>
</thead>
<?php
  if(isset($LesVAssures)) {
foreach ($LesVAssures as $uneVAssure)
{
    echo "<tr> <td>".$uneVAssure['id']."</td>
               <td>".$uneVAssure['nomassure']."</td>
               <td>".$uneVAssure['nbrDossier']."</td>
               </tr>";
    }
  }
?>
</table>
