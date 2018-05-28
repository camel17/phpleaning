<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title>TABLEAU EN PHP </title>
	</head>
	<body>
	<?php
		/* Auteur : Léonce Camel DJOULAKO
			Date : 22 Mars 2017
			Titre: Parcourt du tableau associatif en php avec la boucle foreach 	
		*/
		echo " <h1 style=\"color: skyblue; \">Tableau en php: parcour avec la boucle foreach et la fontion print_r()</h1>";
		/*Création du tableau*/
		$etudiant = array(
						'matricule' => 'CD-CMS-1178',
						'nom'       => 'HAMILTON',
						'sexe'		=> 'Masculin',
						'note'      => '15'	
					);
		
		/*affichage des élement du tableau associatif avec la boucle foreach */
				foreach($etudiant as $etud){
					echo $etud ."<br />";
				}

				echo " <h1 style=\"color: skyblue; \">Affichage avec la clé.</h1>";
				/*affichage des élement du tableau associatif avec la boucle foreach 2e forme */
				foreach($etudiant as $cle => $etud){
					echo  $cle ."  :  " .$etud ."<br />";
				}

				echo " <h1 style=\"color: skyblue; \">Affichage avec la fonction print_r().</h1>";
				/*affichage des élement du tableau associatif avec print_r() */
					echo " <pre>";
					print_r($etudiant);
					echo " </pre>";
	?>
	</body>
</html>