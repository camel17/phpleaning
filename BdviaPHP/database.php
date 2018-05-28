<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8" />
	<title>Manipulation d'une base de donéé en Php</title>
	<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<body>

<?php
	/* connexion a la base de données*/
	define("DB_HOST", "localhost");
	define("DB_NAME", "test");
	define("DB_USERNAME", "root");
	define("DB_PASSWORD", "");

	try{
		/*Connexion a mysql*/
		$db = new PDO("mysql:host=".DB_HOST. ";dbname=" .DB_NAME, DB_USERNAME, DB_PASSWORD) ;
		/*recuperation de tout le contenu de la table jeux_video*/
		$reponse = $db->query('SELECT nom,possesseur FROM jeux_video WHERE console="PS" ORDER BY possesseur');

		/*Affichage des entrées une a une*/
		
		while($donnees = $reponse->fetch()){

?>		
			<p>
					<strong>Jeu</strong> : <?php echo $donnees['nom'] ; ?><br />
					Le possesseur de ce jeu est : <?php echo
					$donnees['possesseur'] ; ?>
			</p>
<?php
		}
			$reponse->closeCursor(); // on Termine le traitement de la requête
			}
			$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			catch(PDOException $e){  
				die('Impossible de se connecter à la base de données: ' .$e->getMessage( ) ) ;
			}		
?>

</body>
</html>