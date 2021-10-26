<table class="table table-bordered">
<thead>
<tr>
    <th scope="col" >ID </th>
    <th scope="col" >Semaines\Jours</th>
    <th scope="col" >Durée</th>
    <th scope="col" >Tarif Location</th>
    <th scope="col" >Date début du dossier </th>
    <th scope="col" >Montant de la franchise </th>
    <th scope="col" >Importance</th>
    <th scope="col" >Importance</th>
</thead>
<?php
  if(isset($LesDossier)) {
foreach ($LesDossier as $unDossier)
{
    echo "<tr> <td>".$unDossier['idReservation']."</td>
               <td>".$unDossier['ptemps']."</td>
               <td>".$unDossier['duree']."</td>
               <td>".$unDossier['PrixLoc']."</td>
               <td>".$unDossier['DateDebut']."</td>
               <td>".$unDossier['DateFin']."</td>
               <td>".$unDossier['idAppart']."</td>
               <td>".$unDossier['idSaison']."</td>
               <td>".$unDossier['idUtili']."</td>

               </tr>";
    }
  }
?>
</table>






DROP TABLE IF EXISTS `reservation`;
CREATE TABLE IF NOT EXISTS `reservation` (
  `idReservation` int(3) NOT NULL AUTO_INCREMENT,
  `ptemps` enum('Jours','Semaines') DEFAULT NULL,
  `duree` int(2) NOT NULL,
  `PrixLoc` float(8,2) NOT NULL,
  `DateDebut` date NOT NULL,
  `DateFin` date NOT NULL,
  `idAppart` int(3) NOT NULL,
  `idSaison` int(3) DEFAULT NULL,
  `idUtili` int(3) NOT NULL,
  PRIMARY KEY (`idReservation`),
  KEY `idAppart` (`idAppart`),
  KEY `idSaison` (`idSaison`),
  KEY `idUtili` (`idUtili`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;