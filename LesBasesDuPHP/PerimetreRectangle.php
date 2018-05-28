<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title>Creer sa propre fonction: PerimetreRectangle() </title>
	</head>
	<body>
	<?php
		/* Auteur : Léonce Camel DJOULAKO
			Date : 21 Mars 2017
			Titre: Fonction qui calcul le périmetre du rectangle en php	
		*/
		echo " <h1 style=\"color: skyblue; \">Calcul du périmetre du rectangle grace à une fonction. </h1>";

		/* debut de la fonction */

		function PerimetreRectangle($longueur, $largeur){
			if( ($longueur && $largeur)>0){
				$perimetre = ($longueur+$largeur)*2 ;
			}
			return $perimetre;
		}

		/*appel de la fonction */
		$perimetre = PerimetreRectangle(12, 5);
		echo "le perimetre de votre rectangle est: " .$perimetre;
	?>
	</body>
</html>