<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LangSchool - Cours de Langue</title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="icon" href="images/langue.png" type="image/png">
</head>

<body>
<?php
//importer le fichier php qui contient la fonction pour se connecter à la bd
include 'bd.php';
//se connecter à la bd
$bdd = getBD();
//recupérer data articles
$rep = $bdd->query('SELECT * FROM articles;');
?>
    <header>
        <img src="images/langue.png" alt="Logo LangSchool" width="75">
        <h1>LangSchool - Cours de Langue</h1>
    </header>

    <section>
        <h2>Nos Cours</h2>
        <?php
        //affichage des articles
        while ($ligne = $rep ->fetch()) {
            $id=$ligne['id'];
            $nom=$ligne['nom'];
            $descr=$ligne['descr'];
            $prix=$ligne['prix'];
            $rest=$ligne['rest'];
            echo "<article>\n";
            echo "<h3><a href='articles/cours.php?id=".strval($id)."'>Cours de ".$nom."</a></h3>\n";
            echo "<p>ID: ".strval($id)."</p>\n";
            echo "<p>".$descr."</p>\n";
            echo "<p>Prix: $".strval($prix)."</p>\n";
            echo "<p>Places restantes: ".strval($rest)."</p>\n";
            echo "<button>Acheter</button>\n";
            echo "</article>\n";
        }
        $rep ->closeCursor(); 
        ?>
    </section>
<footer><a href="contact/contact.php">Contact</a></footer>
</body>

</html>
