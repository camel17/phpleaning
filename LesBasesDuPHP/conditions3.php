<!DOCTYPE html>
<html lang="fr">
	<head>
		<title> Contition 2 </title>
		<meta charset="utf-8">
	</head>
	<body>
	<?php 
			/* Auteur : Léonce Camel DJOULAKO
			   Date : 21 Mars 2017
			   Titre: les conditions en php	
			*/
		$note = 14;
		switch($note){
			case 7 :
				echo "faible";
				break;
			case 10 :
				echo " Passable ";
				break;
			case 14 :
				echo "bien";
				break;
			case 17 :
				echo "TRES BIEN";
				break;
			case 20 :
				echo "excellent";
				break;
			default:
				echo "vous n'avez pas de note";
		}
	?>
	</body>
</html>
