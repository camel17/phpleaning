<?php 
	session_start();

?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8" />
		<title>LES SESSIONS EN PHP</title>
		<link rel="stylesheet" href="./css/style.css" />
		<!-- Auteur : Léonce Camel DJOULAKO
			 Date : 24 Mars 2017 : 00h28.
			 Titre:Sécurisation d'une page web par un mot de passe en PHP.
		-->

	</head>
	<body>
		<h1 class="titre" >Hum ... Vous êtes encore la !!!!! 	voici vos informations: </h1>

		<p>
			<?php 
				echo "Nom : " .$_SESSION['nom'] ."<br />";
				echo "Prénom : " .$_SESSION['prenom'] ."<br />";
				echo "Sexe : " .$_SESSION['sexe'] ."<br />";
			?>
		</p>

		<p>Clic sur Déconnexion pour te Déconnecter !!</p>
		<p>
			<a href="session.php">Acueil</a>
			<a href="lephp.php">Le PHP</a>
			<a href="monscript.php">Scripts PHP</a>
			<a href="informations.php">Informations</a>
			<a href="deconnexion.php">Déconnexion</a>
		</p>

	</body>
</html>