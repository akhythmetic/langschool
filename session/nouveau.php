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
        <h2>Inscription<section>
    </header>

    <form action="enregistrement.php" method="POST">
        <label for="n">Nom:</label>
        <input type="text" id="n" name="n" required><br>

        <label for="p">Prénom:</label>
        <input type="text" id="p" name="p" required><br>

        <label for="adr">Adresse:</label>
        <input type="text" id="adr" name="adr" required><br>

        <label for="num">Numéro de téléphone:</label>
        <input type="text" id="num" name="num" required><br>

        <label for="mail">Adresse e-mail:</label>
        <input type="email" id="mail" name="mail" required><br>

        <label for="mdp1">Mot de passe:</label>
        <input type="password" id="mdp1" name="mdp1" required><br>

        <label for="mdp2">Confirmer votre mot de passe:</label>
        <input type="password" id="mdp2" name="mdp2" required><br>

        <input type="submit" value="Enregistrer">
    </form>



</body>
<footer>
        <a href="../index.php">Acceuil</a>
</footer>


</html>
