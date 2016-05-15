<p>Modifier adresses</p>

<form action="<?=DIR;?>/mon-compte/modiferAdresse" method="POST">
	<p><label for="adresseFacture">Adresse de facture : </label>
	<input type="text" name="adresseFacture"/></p>
	<p><label for="adresseLivraison">Adresse de livraison : </label>
	<input type="text" name="adresseLivraison"/></p>
	<input type="submit" name="submit" value="Envoyer">
</form>