<!DOCTYPE html>
<html lang=fr>
	<head>
		<meta charset="utf-8">
		<title>envoi de fichier en PHP</title>
	</head>
	<body>
	<?php
		/* Auteur : Léonce Camel DJOULAKO
				Date : 22 Mars 2017 18h36
				Titre: Traitement de l'envoi de fichier en PHP
			*/
			echo " <h1 style=\"color: skyblue; \">Traitement de l'envoi de fichier en PHP </h1>  "; 

			/*Testons si le fichier a bien été envoyé et s'il n'y a pas d'erreur */
			if ( isset( $_FILES['imageprofil'] ) && $_FILES['imageprofil']['error'] == 0){

				/* vérifions l'exention du fichier*/
				$infosfichier = pathinfo( $_FILES['imageprofil'] ['name'] ) ;/* retourne un tableau d'information sur le fichier*/
				$extentionfichier = $infosfichier['extension'] ;//on recupere l'extention du fichier

				echo " <br /> son extention est: " .$extentionfichier; //affichage de l'extention recupéré

				$extentionsimage = array( 'jpg', 'jpeg', 'gif', 'png' ) ; /* créons un tableau d'extention d'images */

				/*Vérifion si l'extention de fichier envoyer par l'user est dans dans notre liste d' extention grace la fontion in_array() qui teste si un element est dans un tableau*/
				if ( in_array( $extentionfichier, $extentionsimage) ){

					/* On peut valider l'image de profile de l'utilisateur et le stocker */
				
					move_uploaded_file( $_FILES[ 'imageprofil' ] [ 'tmp_name' ] , 'usersfiles/' .
					basename( $_FILES['imageprofil'] ['name'] ) ) ;

					echo " <br /> Votre image de profil a bien été mis a jour! ";
				
				}
				else{
					echo "<br /> Votre fichier n'est pas une image. essayer de changer...";
				}

			}
			else{
				echo "<br /> Attention aucun fichier n'a été sélectionner. insere un fichier svp!!!";
			}		
	?>

	</body>
			
</html>