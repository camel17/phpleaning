<!DOCTYPE html>
<html lang=fr>
	<head>
		<meta charset="utf-8">
		<title>Envoi des données avec les formulaires</title>
	</head>
	<body>
			<!-- Auteur : Léonce Camel DJOULAKO
				Date : 22 Mars 2017 : 16h28.
				Titre: traitement du formulaire en php avec url.
			-->

		<form method="post" action="traitementform.php">
			<p>
				<label for="pseudo" > Votre Pseudo: </label>
				<input type="text" name="pseudo" id="pseudo" placeholder="Ex: Phonety" /> <br />

				<span> Aimez vous l'informatique? </span>
				<input type="radio" name="info" id="oui" value="oui"> <label for="oui" > oui</label>
				<input type="radio" name="info" id="non" value="non"> <label for="non" > oui</label> <br />

				<span>Quel est votre langage de programmation le plus préféré?</span>
				<select name="langage">
					<option value="JAVA"> JAVA </option>	
					<option value="PHP"> PHP </option>
					<option value="C++"> C++ </option>
					<option value="C#"> C# </option>
					<option value="C"> C </option>
					<option value="JAVASCRIPT">  JAVASCRIPT </option>			
					<option value="HTML"> HTML </option>			
					<option value="PYTHON" selected="selected"> PYTHON  </option>	
				</select> <br />

				<label for="commentaire" > Votre commentaire</label>
				<textarea name="commentaire" id="commentaire" cols="30" rows="8" > </textarea>	<br />	
				<input type="submit" value="Valider" />

			</p>

		</form>

	</body>
</html>