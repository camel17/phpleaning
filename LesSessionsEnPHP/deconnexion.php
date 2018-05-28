<?php 
	session_start();
	session_destroy();
	// die("vous êtes déconecté.");
 ?>

 <!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8" />
		<title>LES SESSIONS EN PHP-info</title>
		<link rel="stylesheet" href="./css/style.css" />
		<!-- Auteur : Léonce Camel DJOULAKO
			 Date : 23 Mars 2017 : 10h28.
			 Titre:Sécurisation d'une page web par un mot de passe en PHP.
		-->
	</head>
	<body>
		<h1 class="titre" >Deconnexion effectué avec success</h1>
		<p>
			<a href="session.php">Acueil</a>
			<a href="lephp.php">Le PHP</a>
			<a href="monscript.php">Scripts PHP</a>
			<a href="informations.php">Informations</a>
			<a href="deconnexion.php">Déconnexion</a>
		</p>
	</body>
</html>