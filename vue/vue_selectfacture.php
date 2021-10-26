<table class="table table-bordered">
<thead>
<tr>
    <th scope="col" >ID Facture</th>
    <th scope="col" >ID du dossier</th>
    <th scope="col" >Designation</th>
    <th scope="col" >Montant TTC</th>
</thead>
<?php
  if(isset($LesFacture)) {
foreach ($LesFacture as $uneFacture)
{
    echo "<tr> <td>".$uneFacture['idFact']."</td>
               <td>".$uneFacture['referenceD']."</td>
               <td>".$uneFacture['Designation']."</td>
               <td>".$uneFacture['MontantTTC']."</td>

               </tr>";
    }
  }
?>
</table>
