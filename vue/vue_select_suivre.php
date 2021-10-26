<table border=1><table class="table table-bordered">
<thead>
<tr>
    <th scope="col" >idSociete</th>
    <th scope="col" >ID personnne</th>
    <th scope="col" >Contenu</th>
    <th scope="col" >DateContact</th>
</thead>
<?php
  if(isset($lesSuivre)) {
foreach ($lesSuivre as $unSuivre)
{
    echo "<tr>  <td>".$unSuivre['idDO']."</td>
				<td>".$unSuivre['idpersonne']."</td>
				<td>".$unSuivre['contenu']."</td>
				<td>".$unSuivre['dateContact']."</td>
               </tr>";
    }
  }
?>
</table>
