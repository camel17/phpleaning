 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // activation du mode erreur
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // préparez la Requette SQL et liez les paramètres 
    $req = $conn->prepare("INSERT INTO Myguests (firstname, lastname, email)
    VALUES (:firstname, :lastname, :email)");
    $req->bindParam(':firstname', $firstname);
    $req->bindParam(':lastname', $lastname);
    $req->bindParam(':email', $email);

    // insert a row
    $firstname = "John";
    $lastname = "Doe";
    $email = "john@example.com";
    $req->execute(); 

    // insert another row
    $firstname = "Mary";
    $lastname = "Moe";
    $email = "mary@example.com";
    $req->execute();

    // insert another row
    $firstname = "Julie";
    $lastname = "Dooley";
    $email = "julie@example.com";
    $req->execute();

    echo "New records created successfully <br />";
    echo "affichage des infos de la table <br />";
    $reponse = $conn->query('SELECT * FROM myguests');
    echo "LISTE DES INVITES <br />";
    while($donnees = $reponse->fetch()){
    	echo "Nom:" .$donnees['lastname'] ."<br />";

    }
    }
catch(PDOException $e)
    {
    echo "Error: " . $e->getMessage();
    }
$conn = null;
?> 