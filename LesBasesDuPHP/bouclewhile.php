<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title> <?php echo "Learning PHP"; ?> </title>
	</head>
		<body>
			<?php 
				/* Auteur : Léonce Camel DJOULAKO
				   Date : 21 Mars 2017
				   Titre: les conditions en php	
				*/
				echo " <h1 style=\"color: skyblue; \">La boucle while en php </h1>  ";
				$compteur = 1 ;

				while($compteur <= 10){
					echo $compteur ." - J'apprend du PHP par la pratique. <br />";
					$compteur++;
				}
				echo $compteur;
			?>

		</body>
</html>
