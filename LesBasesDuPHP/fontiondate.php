<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title>Afficher l'heure et la date en PHP avec la fonction date() </title>
	</head>
	<body>
	<?php
		/* Auteur : Léonce Camel DJOULAKO
			Date : 21 Mars 2017
			Titre: La fonction strtolower en php	
		*/
		echo " <h1 style=\"color: skyblue; \">La fontion date( ) en php pour afficher l'heure et la date </h1>  ";

		$jour = date( 'd' ) ;
		$mois = date( 'm' ) ;
		$annee = date( 'Y' ) ;
		$heure = date( 'H' ) ;
		$minute = date( 'i' ) ;

		echo "Salut les gards nous somme le " .$jour ."/" .$mois ."/" . $annee ." A l'heure ou je vous parle il est exactement " .$heure ."h" .$minute ."min";
	?>
	</body>
</html>