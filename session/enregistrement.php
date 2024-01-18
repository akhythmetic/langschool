<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enregistrement</title>
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="icon" href="../images/langue.png" type="image/png">
</head>

<body>
    <header>
        <a href="../index.php"><img src="../images/langue.png" alt="Logo LangSchool" width="75"></a>
        <h2>Enregistrement</h2>
    </header>
    <p>
        <?php
        echo $_POST['n']."<br>\n";
        echo $_POST['p']."<br>\n";
        echo $_POST['adr']."<br>\n";
        echo $_POST['num']."<br>\n";
        echo $_POST['mail']."<br>\n";
        echo $_POST['mdp1']."<br>\n";
        echo $_POST['mdp2']."<br>\n";
        ?>
    </p>



</body>
<footer>
        <a href="../index.php">Acceuil</a>
</footer>


</html>
