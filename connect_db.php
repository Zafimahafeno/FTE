<?php
// Informations de connexion à la base de données
$servername = "mysql-tsirionantsoa.alwaysdata.net"; // Adresse du serveur de la base de données
$username = "313797_zanajaona"; // Nom d'utilisateur de la base de données
$password = "zanajaona0201"; // Mot de passe de la base de données
$dbname = "tsirionantsoa_fte"; // Nom de la base de données

// Connexion à la base de données
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Erreur de connexion à la base de données : " . $conn->connect_error);
}
else{
    die("Connection reussie!");
}
// Fermer la connexion
$conn->close();
?>