<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Conditions en PHP</title>
		<meta charset="utf-8">
	</head>
	<body>
		<?php 

			/* Auteur : Léonce Camel DJOULAKO
			   Date : 21 Mars 2017
			   Titre: The conditions in php
			   Heure de debut : 5h45 min
			*/
			$age = 7; 
			echo "#TheCamelGeek ";
			echo "<br />";
			$autorisation_enter = true;
			if($age >= 18){
				echo "Vous ête majeur <br  />";
				$autorisation_enter = true;
			}
			else{
				 echo "Vous êtes mineur car vous avez " .$age." ans <br />";
				 $autorisaation_enter = false;
				}	

			if($autorisation_enter==true){
				echo "you have de law to visite my web site www.TheCamelGeek.com <br />";
			}
			elseif($autorisation_enter==false){
				echo "Warning you do not visite my website... <br />";
			}
			else{
				echo "I dont no you age please try again";
				}		?>
	</body>
</html>