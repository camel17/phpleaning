<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>LECTURE ET ECRITURE DANS UN FICHIER EN PHP</title>
		<link rel="stylesheet" type="text/css" href="css/style.css" >
	</head>
	<body>
		<?php
			/* Auteur : Léonce Camel DJOULAKO
				Date : 24 Mars 2017
				Titre: Lecture  et ecriture dans un fichier en PHP	
			*/

			$fichier = fopen( 'comptevisite.txt' , 'r+' ) ;
			$pages_vues = fgets($fichier) ; /* On lit la première ligne(nombre de pages vues)*/
			$pages_vues++; /* On augmente de 1 ce nombre de pages vues */
			fseek( $fichier, 0) ; /* On remet le curseur au début du fichier */
			fputs( $fichier, $pages_vues) ; /* On écrit le nouveau nombre de pages vues */
			fclose( $fichier) ;
			echo ' <p class="cadre" >Cette page a été vue ' .$pages_vues .' fois ! </p>' ;
?>
	</body>
</html>