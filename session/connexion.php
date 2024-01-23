<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="icon" href="../images/langue.png" type="image/png">
</head>

<body>
    <header>
        <a href="../index.php"><img src="../images/langue.png" alt="Logo LangSchool" width="75"></a>
        <h2>Se Connecter<section>
    </header>

    

    <form action="connecter.php" method="POST">
        <label for="mail">Adresse e-mail:</label>
        <input type="email" id="mail" name="mail"><br>

        <label for="mdp">Mot de passe:</label>
        <input type="password" id="mdp" name="mdp"><br>

        <input type="submit" value="Enregistrer">
    </form>



</body>
<footer>
    <a href="nouveau.php">S'inscrire</a>
    <a href="../index.php">Accueil</a>
</footer>


</html>
