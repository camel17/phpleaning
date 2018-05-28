<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title>Creer sa propre fonction: Bonjour() </title>
	</head>
	<body>
	<?php
		/* Auteur : Léonce Camel DJOULAKO
			Date : 21 Mars 2017
			Titre: Ma fonction de salutation en php	
		*/
		echo " <h1 style=\"color: skyblue; \">Fonction qui salut le visiteur de mon site web. </h1>";

			/* fonction de salutation*/
		 function Salut($nom){
		 	echo " <h2 style=\"color: blue; \"> Hello " .$nom ."</h2>";
		 }

		 // appel de la fonction salut()
		 Salut("Léonne vastide");
		
	?>
	</body>
</html>