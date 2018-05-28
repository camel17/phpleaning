<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title>TABLEAU EN PHP </title>
	</head>
	<body>
	<?php
		/* Auteur : Léonce Camel DJOULAKO
			Date : 21 Mars 2017
			Titre: Tableau(array) en php 	
		*/
		echo " <h1 style=\"color: skyblue; \">Tableau en php: Les Tableaux numérotés.</h1>";
		/*Création du tableau*/
		$langage  = array("HTML", "CSS","JAVASCRIPT", "PHP", "JAVA", "C++", "C", "PYTHON" );

		/*Affichage des éléments du tableu*/

		for($i = 0; $i <= 7; $i++){

			echo "Le Langage " .$langage[$i] ."<br />";
		}
	?>
	</body>
</html>