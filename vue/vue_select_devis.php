<table class="table table-bordered">
<thead>
<tr>
    <th scope="col" >Référence Devis</th>
    <th scope="col" >Référence Dossier</th>
    <th scope="col" >DateDevis </th>
    <th scope="col" >Etat</th>
    <th scope="col" >MontantHt </th>
    <th scope="col" >TVA</th>
    <th scope="col" >MontantTVA</th>
</tr>
</thead>
<?php
  if(isset($lesDevis)) {
foreach ($lesDevis as $unDevis)
{
    echo "<tr> <td>".$unDevis['referenceD']."</td>
               <td>".$unDevis['idD']."</td>
               <td>".$unDevis['devisdate']."</td>
               <td>".$unDevis['etat']."</td>
               <td>".$unDevis['MontantHT']."</td>
               <td>".$unDevis['TVA']."</td>
               <td>".$unDevis['MontantTVA']."</td>
               </tr>";
    }
  }
?>
</table>


