<!DOCTYPE html>
<html lang="fr">

<head>
    <?php
    //importer le fichier php qui contient la fonction pour se connecter à la bd
    include '../bd.php';
    //se connecter à la bd
    $bdd = getBD();
    //récupérer la variable $id
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
    }
    else{
        $id=1;
    }//par def $id=1
    //recupérer data articles
    $rep = $bdd->query('SELECT * FROM articles WHERE id = '.$id.';');
    $ligne = $rep ->fetch();
    $path_img=$ligne['path_img'];
    $nom=$ligne['nom'];
    $descr=$ligne['descr'];
    $prix=$ligne['prix'];
    $rest=$ligne['rest'];
    ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cours de <?php echo $nom; ?></title>
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="icon" href="../images/langue.png" type="image/png">
</head>

<body>
    <header>
        <a href="../index.php"><img src="../images/langue.png" alt="Logo LangSchool" width="75"></a>
        <h2>Cours de <?php echo $nom; ?><section>
        <img src=<?php echo "../".$path_img; ?> alt=<?php echo $nom; ?> width="100">
    </header>
        
   

    <section>
        <img src=<?php echo "../".$path_img; ?> alt=<?php echo $nom; ?> width="150">
        <p><?php echo $descr; ?></p>
    </section>

    <section>
        <h2>Ce que vous apprendrez :</h2>
        <ul>
            <li>Maîtrisez les bases de la langue <?php echo $nom; ?></li>
            <li>Participez à des sessions en visio de deux heures</li>
            <li>Explorez la culture liée au <?php echo $nom; ?></li>
            <li>Échangez avec d'autres passionnés</li>
        </ul>
    </section>



</body>
<footer>
        <a href="../index.php">retour</a>
</footer>


</html>
