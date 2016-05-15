<p>Gestion d'adresses </p>

<?php 
	echo "<p>Adresse de facturation</p>";
	foreach ($adress as $adresses) {
		echo $adresses->adressFacture;	
		echo "<br/>";
	if ($adresses->adressFacture != $adresses->adressLivraison) {
		echo "<p> Adresse de livraison </p>";
		echo $adresses->adressLivraison;
	}
	}
?>

<p><a href="<?= DIR;?>mon-compte/modifier-adresses">Modifier mes adresses</a></p>