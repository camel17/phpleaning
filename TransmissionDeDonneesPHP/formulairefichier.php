<!DOCTYPE html>
<html lang=fr>
	<head>
		<meta charset="utf-8">
		<title>Envoi des données avec les formulaires</title>
	</head>
	<body>
			<!-- Auteur : Léonce Camel DJOULAKO
				Date : 22 Mars 2017 : 16h28.
				Titre: Envoi de fichier grace aux formulaire en PHP.
			-->

		<form method="post" action="traiterfichier.php" enctype="multipart/form-data" >
			<p> Formulaire d'envoi de fichier : <br /><br />
				<label for="imageprofil" > Inserer une image de profil:   </label> 
				<input type="file" name="imageprofil" id="imageprofil" /> <br /><br />
				<input type="submit" value="Envoyer">
			</p>

		</form>

	</body>
</html>