<?php
// Connexion à la base de données
$dbhost = '192.168.10.233';
$dbuser = 'root';
$dbpass = '';
$dbname = 'geek';

// Vérification de la soumission du formulaire
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération des données du formulaire
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $telephone = $_POST['auth_user']; // 'telephone' = 'auth_user'
    $redirurl = $_POST['redirurl'];
    $zone = $_POST['zone'];

    // Connexion à la base de données
    $conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

    // Vérification de la connexion
    if ($conn->connect_error) {
        die("Connexion échouée : " . $conn->connect_error);
    }

    // Préparation de la requête SQL d'insertion
    $sql = "INSERT INTO client (nom, prenom, telephone) 
            VALUES ('$nom', '$prenom', '$telephone')";

    // Exécution de la requête

    if ($conn->query($sql) === TRUE) {
        header("Location: captiveportal-portail.html");
        exit; // Assurez-vous de terminer l'exécution du script après la redirection
    } else {
        echo "Erreur : " . $sql . "<br>" . $conn->error;
    }

    // Fermeture de la connexion
    $conn->close();
}
?>

