<h3> Insertion d'un dossier </h3>
	<form method ="post" action ="">
	<table border =0>

	<tr> <td> ID du donneur d'ordre du dossier :</td>
	<td> <input type="number" name="idDo"> </td> </tr>

	<tr> <td> Votre ID :</td>
	<td> <input type="number" name="idpersonne"> </td> </tr>

	<tr> <td> ID assuré :</td>
	<td> <input type="number" name="idpersonne_1"> </td> </tr>

	<tr> <td> Date début du dossier :</td>
	<td> <input type="date" name="dateDossierDeb"> </td> </tr>

	<tr> <td> Montant de la franchise :</td>
	<td> <input type="text" name="montantfranchise"> </td> </tr>

	<tr> <td> Importance :</td>
	<td>	<input type="radio" name="importance" value="Oui"> Oui
				<input type="radio" name="importance" value="Non"> Non </br> </td>


	<tr> <td> <input type="reset" name="Annuler" value="Annuler"> </td>
	<td> <input type="submit" name="Ajouter" value="Ajouter"> </td> </tr>
	</table>
	</form>
