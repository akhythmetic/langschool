<?php
include 'config.php';

function getBD() {
    global $localhostCredentials;

    try {
        $bdd = new PDO(
            "mysql:host={$localhostCredentials['host']};dbname={$localhostCredentials['dbname']};charset={$localhostCredentials['charset']}",
            $localhostCredentials['username'],
        );

        // Configure PDO to throw exceptions on error
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $bdd;
    } catch (PDOException $e) {
        // Gérer l'erreur de connexion de la base de données
        die('Erreur ');
    }
}
?>
