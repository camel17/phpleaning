<!DOCTYPE html>
<html lang=fr>
	<head>
		<meta charset="utf-8">
		<title>traitement du  formulaires en php</title>
		<link rel="stylesheet" href="css/style.css" />
		<link rel="icon" href="./images/cle.png" />
	</head>
	<body>
	<?php
		/* Auteur : Léonce Camel DJOULAKO
				Date : 23 Mars 2017
				Titre: Sécurisé Une page WEB par un mot de passe en PHP 
			*/
			echo " <h1 class=\"titre\">Les codes d'accès au serveur central de la NASA</h1>  "; 

			if( isset( $_POST['password']) && $_POST['password']!="") {
				 $motdepasse = $_POST['password']; /* simple affectation du mot de passe du visiteur*/
				 $pass = "personalcomputer";
				 /* on teste l'égalité des mots de passe et on affiche le message si c'est bon.*/
				  if ( $motdepasse == $pass ) {
				  	echo " <div class=\"codenasa\"> ";
				  	echo "<h1>Voici les codes d' accès : </h1>
						<p><strong>CRD5-GTFT-CK65-JOPM-V29N-24G1-HH28-LLFV</strong></p>
						<p>
						Cette page est réservée au personnel de la NASA. N' oubliez pas de
						la visiter régulièrement car les codes d'accès sont changés toutes
						les semaines. <br />
						La NASA vous remercie de votre visite </p>.<br />";
					echo " </div> ";
				  }
				  else{
				  	echo "Mot de passe incorrect <br />";
				  }
			}
			else{
				echo "Vous n'avez pas enter de mot de passe.  <br /> ";
				}
	?>
	<p clas="cadreform"> cliquer <a href="formulaire.php">Ici</a> pou recommencer svp</p>

	</body>
			
</html>