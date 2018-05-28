<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8" />
		<title>La fonction str_replace()</title>
	</head>
	<body>
		<?php
			/* Auteur : Léonce Camel DJOULAKO
				Date : 21 Mars 2017
				Titre: La fonction str_replace en php	
			*/
			echo " <h1 style=\"color: skyblue; \">La fontion str_replace( ) en php </h1>  ";

			$name = "ThepseudoGeek";
			$remplace = str_replace("pseudo", "Camel", $name);
			echo " Le nom de depart est: " .$name ." <br /> Après remplacement de pseudo, le resultat  est le suivant:  " .$remplace;

		?>

	</body>
</html>