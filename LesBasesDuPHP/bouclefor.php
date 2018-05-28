<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>La boucle for</title>
</head>
	<body>
		<?php  
			/* Auteur : Léonce Camel DJOULAKO
				   Date : 21 Mars 2017
				   Titre: La boucle for en php	
				*/
			echo " <h1 style=\"color: skyblue; \">La boucle for en php </h1>  "; /* balise avec style dans php*/
			$ligne = 1;
			for($ligne; $ligne <= 10; $ligne++){
				echo "ligne - " .$ligne. " : Je deviens  pro en PHP par la pratique.<br />";
			}
			
			echo $ligne;
		?>
	</body>
</html>