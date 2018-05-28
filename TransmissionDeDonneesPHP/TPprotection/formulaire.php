<!DOCTYPE html>
<html lang="fr">
<head>
		<meta charset="utf-8">
		<title>Sécurisé Une page WEB par un mot de passe en PHP </title>
		<link rel="stylesheet" href="css/style.css" />
		<link rel="icon" href="./images/cle.png" />
	</head>
	<body>
		<!-- Auteur : Léonce Camel DJOULAKO
			 Date : 23 Mars 2017 : 10h28.
			 Titre:Sécurisation d'une page web par un mot de passe en PHP.
		-->
		<div class="container">

			<h1 class="titre">Informations confidentielles de la NASA ! </h1>

			<p class="paragraphe">Veuillez entrer le mot de passe pour obtenir les codes d'accès
				au serveur central de la NASA : </p>

			<form method="post" action="code.php" class="cadreform">
				<!-- password field -->
			    <div class="form-group">
					<label for="password" class="control-label">Mot de passe:</label>
					<input type="password" name="password"  class="form-control" id="password" />
				</div>

				<input type="submit" value="Valider" class="sendform" name="Valider" />

			</form>

			<p>Cette page est réservée au personnel de la NASA. Si vous ne 	travaillez pas à la NASA, inutile d'insister vous ne trouverez jamais le mot de passe !</p>

		</div> <!--/container -->

	</body>
</html>