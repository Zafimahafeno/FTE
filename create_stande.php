<?php
// Informations de connexion à la base de données
$servername = "mysql-tsirionantsoa.alwaysdata.net"; // Adresse du serveur de la base de données
$username = "313797_zanajaona"; // Nom d'utilisateur de la base de données
$password = "zanajaona0201"; // Mot de passe de la base de données
$dbname = "tsirionantsoa_fte"; // Nom de la base de données

// Récupération des données du formulaire
$name_ps = $_POST['nom'];
$phone_ps = $_POST['phone'];
$mail_ps = $_POST['email'];
$typestand = $_POST['typestand'];

// Connexion à la base de données
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Erreur de connexion à la base de données : " . $conn->connect_error);
}

// Préparer la requête d'insertion
$sql = "INSERT INTO participant_stand (name_ps, phone_ps, mail_ps, id_os)
        VALUES ('$name_ps', '$phone_ps', '$mail_ps', '$typestand')";

// Exécuter la requête d'insertion
if ($conn->query($sql) === TRUE) {
    echo '<script>alert("Nous avons enregistré votre réservation dans notre liste, et vous serez contacté par le responsable pour procéder au paiement."); window.location.href = "index.php";</script>';
} else {
    echo "Erreur lors de l'ajout des données : " . $conn->error;
}

// Fermer la connexion
$conn->close();

exit;
?>