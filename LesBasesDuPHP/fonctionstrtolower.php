<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset = "utf-8" />
		<title>La fonction strtolower() et strtoupper</title>
	</head>
	<body>
		<?php
			/* Auteur : Léonce Camel DJOULAKO
				Date : 21 Mars 2017
				Titre: La fonction strtolower en php	
			*/
			echo " <h1 style=\"color: skyblue; \">La fontion strtolower( ) en php </h1>  ";

			$chainemaj = "J'APPREND DU PHP PAR LA PRATIQUE GRACE A CAMEL TECHNOLOGY." ;
			$chaineminus = strtolower($chainemaj);

			$chainemin = " j'ai une certification en php.";
			$chainemajus = strtoupper($chainemin);


			echo "  Voici notre texte de depart: " .$chainemaj;
			echo " <br /> après appel de la fonction strtolower on obtient: " .$chaineminus;

			echo " <br/> <h1 style=\"color: skyblue; \">La fontion strtoupper() en php </h1>  ";

			echo "Voici notre texte de depart en minuscule:  " .$chainemin;
			echo " <br /> après appel de la fonction strtoupper on obtient: " .$chainemajus;
		?>
	</body>
</html>