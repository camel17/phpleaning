<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title>TABLEAU ASSOCIATIF EN PHP </title>
	</head>
	<body>
	<?php
		/* Auteur : Léonce Camel DJOULAKO
			Date : 21 Mars 2017
			Titre: Tableau(array) associatif en php 	
		*/
		echo " <h1 style=\"color: skyblue; \">Tableau en php: Les Tableaux associatif.</h1>";
		/*Création du tableau*/
		$etudiant = array(
						'matricule' => 'CD-CMS-1178',
						'nom'       => 'HAMILTON',
						'sexe'		=> 'Masculin',
						'note'      => '15'	);

		/*affichage d'un élement du tableau associatif*/
				echo "le nom de l'étudiant est: " .$etudiant['nom'];
	?>
	</body>
</html>