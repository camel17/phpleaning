<?php
	session_start(); /* Demarrage de la session*/

	/* Creation des variables de session*/
	$_SESSION['nom'] = "DJOULAKO";
	$_SESSION['prenom'] = "Camel";
	$_SESSION['sexe'] = "Masculin";
?>

<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8" />
		<title>LES SESSIONS EN PHP</title>
		<link rel="stylesheet" href="./css/style.css" />
	</head>
	<body>
		<h1 class="titre" >Hello <?php echo "'  " .$_SESSION['prenom'] ."  '"; ?> et bienvenue <strong> sur le site Thecamelgeek.com</strong></h1>

		<p>Naviguer à travers les liens ci-dessous</p>

		<p>
			<a href="session.php">Acueil</a>
			<a href="lephp.php">Le PHP</a>
			<a href="monscript.php">Scripts PHP</a>
			<a href="informations.php">Informations</a>
			<a href="deconnexion.php">Déconnexion</a>
		</p>

		<?php 
		/*
			echo "<pre>";
				echo print_r($_SESSION);
				echo var_dump($_SESSION);
			echo "</pre>";
			*/
		 ?>

	</body>
</html>