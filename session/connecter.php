<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enregistrement</title>
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="icon" href="../images/langue.png" type="image/png">

    <?php
// Inclure le fichier PHP contenant la fonction de connexion à la BD.
include '../bd.php';

// Fonction pour vérifier le mot de passe en fonction de l'adresse e-mail.
function verifierMotDePasse($email, $saisieMotDePasse) {
    // Se connecter à la BD.
    $bdd = getBD();

    // Préparer la requête SQL avec des paramètres.
    $query = $bdd->prepare("SELECT mdp FROM Clients WHERE mail = :email");

    // Lier le paramètre avec la valeur de la variable.
    $query->bindParam(':email', $email);

    // Exécuter la requête.
    try {
        $query->execute();

        // Récupérer le résultat.
        $result = $query->fetch(PDO::FETCH_ASSOC);

        // Vérifier si un résultat a été obtenu.
        if ($result) {
            $mdpStocke = $result['mdp'];

            // Vérifier si le mot de passe saisi correspond au mot de passe stocké.
            return password_verify($saisieMotDePasse, $mdpStocke);
        } else {
            return false; // Aucun résultat trouvé pour l'adresse e-mail.
        }
    } catch (PDOException $e) {
        // Gérer l'erreur de requête de la base de données.
        die('Une erreur est survenue lors de la vérification du mot de passe. Veuillez réessayer plus tard.');
    }
}

// Utilisation de la fonction pour vérifier le mot de passe.
$emailSaisi = $_POST["mail"];
$motDePasseSaisi = $_POST["mdp"];

if (verifierMotDePasse($emailSaisi, $motDePasseSaisi)) {
    echo "<meta http-equiv='refresh' content='1;url=../index.php'>";
} else {
    echo "<meta http-equiv='refresh' content='1;url=connexion.php?msg=true'>";
}
?>

</head>

<body>
    <header>
        <a href="../index.php"><img src="../images/langue.png" alt="Logo LangSchool" width="75"></a>
        <h2>Enregistrement</h2>
    </header>
</body>
<footer>
</footer>


</html>
