<h3> Insertion d'un Devis </h3>
	<form method ="post" action ="">
	<table border =0>

	

	<tr> <td> Id Dossier  :</td>
	<td> <input type="number" name="idD"> </td> </tr>

	<tr> <td> DateDevis  :</td>
	<td> <input type="date" name="devisdate"> </td> </tr>

	<tr> <td>  Etat :</td>
	<td>	<input type="radio" name="etat" value="Oui"> Oui
				<input type="radio" name="etat" value="Non"> Non </br> </td>


	<tr> <td> MontantHT:</td>
	<td> <input type="number" name="MontantHT"> </td> </tr>

	<tr> <td> TVA :</td>
	<td> <input type="number" name="TVA"> </td> </tr>

	<tr> <td> MontantTVA :</td>
	<td> <input type="number" name="MontantTVA"> </td> </tr>

	


	<tr> <td> <input type="reset" name="Annuler" value="Annuler"> </td>
	<td> <input type="submit" name="s" value="Ajouter"> </td> </tr>
	</table>
	</form>
