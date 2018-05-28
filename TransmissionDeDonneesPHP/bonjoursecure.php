<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8" />
		<title>Transmetre des données en PHP / URL- test de parametre</title>
	</head>
	<body>
		<?php
				/* Auteur : Léonce Camel DJOULAKO
				Date : 22 Mars 2017
				Titre: transmission de données en php gestion de securité	
			*/
			echo " <h1 style=\"color: skyblue; \">Transmetre des données à une URL en PHP avec sécurité - test de parametre</h1>  ";

			echo " <p> ";
				if( isset($_GET['prenom']) && isset($_GET['prenom']) ){
					echo "Bonjour " .$_GET['prenom'] ." " .$_GET['nom'] ." !";
				}
				else{
					echo " <br /> Il manque de parametre à votre URL. Vérifier la barre d'adresse et essayer encore. ";
				}
			echo " </p> ";
		?>
	</body>
</html>