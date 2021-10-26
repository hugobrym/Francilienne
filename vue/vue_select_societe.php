
<table class="table table-bordered">
<thead>
<tr>
    <th scope="col" >idSociete</th>
    <th scope="col" >Raison sociale</th>
    <th scope="col" >Adresse</th>
    <th scope="col" >Ville</th>
    <th scope="col" >Email</th>
    <th scope="col" >Tel Portable</th>
    <th scope="col" >Code Postal</th>
</tr>
</thead><?php
  if(isset($lesSocietes)) {
foreach ($lesSocietes as $uneSociete)
{
    echo "<tr> <td>".$uneSociete['idDO']."</td>
               <td>".$uneSociete['RAISON_SOCIALE']."</td>
               <td>".$uneSociete['ADRESSE']."</td>
               <td>".$uneSociete['VILLE']."</td>
               <td>".$uneSociete['EMAIL']."</td>
               <td>".$uneSociete['TEL']."</td>
               <td>".$uneSociete['CP']."</td>
               </tr>";
    }
  }
?>
</table>


