<?php 
	$cookie_name = "pseudo";
	$cookie_value = "TheCamelGeek";
	setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/",  null, false, true );
?>

<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="./css/style.css">
		<title>Les cookies en PHP</title>
	</head>
	<body>
		<!--
			Auteur : Léonce Camel DJOULAKO
			Date : 24 Mars 2017
			Titre: Creation et affichage des cookies en php
		-->

		<p> 
			Hé ! Je me souviens de toi ! <br />
			<h1 class="titre">Voici tes informattions garder dans les cookies:</h1>
		</p>
		<div class="cadre"> 
			<?php
				/* on teste si le non du cookie existe*/
				if(!isset($_COOKIE[$cookie_name])) {
   					echo "La cookie de nom: '" . $cookie_name . "' n'est pas definie!";
				} else {
    				echo "La cookie de nom '" . $cookie_name . "' est bel et bien definie !<br>";
    				echo "Sa valeur est: '" . $_COOKIE[$cookie_name] ."'";
				}
			?>
		</div>

	</body>
</html>