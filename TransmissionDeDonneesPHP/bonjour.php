<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8" />
		<title>Transmetre des données en PHP avec l' URL</title>
	</head>
	<body>
		<?php
				/* Auteur : Léonce Camel DJOULAKO
				Date : 22 Mars 2017
				Titre: transmission de données en php avec url	
			*/
			echo " <h1 style=\"color: skyblue; \">Transmetre des données à une URL en PHP </h1>  ";

			echo " <p> ";
				echo "Bonjour " .$_GET['prenom'] ." " .$_GET['nom'] ." !";
			echo " </p> ";
		?>
	</body>
</html>