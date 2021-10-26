<table class="table table-bordered">
<thead>
<tr>
    <th scope="col" >ID du dossier </th>
    <th scope="col" >ID du donneur d'ordre</th>
    <th scope="col" >ID utilisateur</th>
    <th scope="col" >ID assuré</th>
    <th scope="col" >Date début du dossier </th>
    <th scope="col" >Montant de la franchise </th>
    <th scope="col" >Importance</th>
</thead>
<?php
  if(isset($LesDossier)) {
foreach ($LesDossier as $unDossier)
{
    echo "<tr> <td>".$unDossier['referenceD']."</td>
               <td>".$unDossier['idDO']."</td>
               <td>".$unDossier['idpersonne']."</td>
               <td>".$unDossier['idpersonne_1']."</td>
               <td>".$unDossier['dateDossierDeb']."</td>
               <td>".$unDossier['montantfranchise']."</td>
               <td>".$unDossier['importance']."</td>

               </tr>";
    }
  }
?>
</table>


