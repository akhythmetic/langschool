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
    //##############################
    //patch SQLi Prepared Statements
    $resultats = $bdd->query('SELECT id FROM articles');
    $liste_ids = $resultats->fetchAll(PDO::FETCH_COLUMN);
    $resultats->closeCursor();
    $flag=false;
    $i=count($liste_ids) -1;
    $q=$liste_ids[$i];
    while(!$flag && $i>=0){//ceci est un boucle de vérification de la varible $_GET['id']
        $q=$liste_ids[$i];//la variable $q a pour valeur l'id qui sera placer dans la requette sql afin d'eviter les SQLi
        $flag=($q==$id);
        $i--;
    } 
    //##############################
    //recupérer data articles
    try {
        $rep = $bdd->query('SELECT * FROM articles WHERE id = '.$q.';');
    } 
    catch (PDOException $e) {
        // Handle database query error
        die('Une erreur est survenue. Veuillez réessayer plus tard.');
    }
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
        <h2>Cours de <?php echo $nom; ?></h2>
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
        <a href="../index.php">Acceuil</a>
</footer>


</html>
