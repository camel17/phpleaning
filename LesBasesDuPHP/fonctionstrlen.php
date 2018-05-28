<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8" />
		<title>La fonction strlen()</title>
	</head>
	<body>
		<?php
			/* Auteur : Léonce Camel DJOULAKO
				   Date : 21 Mars 2017
				   Titre: la fonction strlen en php	
			*/
			echo " <h1 style=\"color: skyblue; \">La fonction strlen( ) en php </h1>  ";

			$chaine = "I am a develper";
			$nbrecaractere = 0;
			$nbrecaractere = strlen($chaine);
			echo "La phrase suivante : <br /> <u style=\"color: red;\">" .$chaine ." <br /> </u> comporte exactement " .$nbrecaractere ." caractères";
		?>
	</body>
</html>