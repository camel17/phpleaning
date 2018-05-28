<!DOCTYPE html>
<html lang=fr>
	<head>
		<meta charset="utf-8">
		<title>traitement du  formulaires en php</title>
	</head>
	<body>
	<?php
		/* Auteur : Léonce Camel DJOULAKO
				Date : 22 Mars 2017
				Titre: traitement du formulaire en php avec url	
			*/
			echo " <h1 style=\"color: skyblue; \">Traitement du formulaire en PHP </h1>  "; 

				echo "Hello votre Pseudo est:  " .$_POST['pseudo'];

				echo "<br /> <br /> voici le commentaire que vous avez entrer: <br /> " .$_POST['commentaire'];

				echo " <br /><br /> Aimez vous l'informatique: " .$_POST['info'];

				echo " <br /> <br /> votre langage de programmation préféré est le: " .strip_tags($_POST['langage']);
				/* ou .htmlspecialchars($_POST['langage']);*/
	?>
		<br />
	<p>Si tu veux changer de pseudo, <a href="formulaire.php">clique ici</a> pour revenir à formulaire.php</p>

	</body>
			
</html>