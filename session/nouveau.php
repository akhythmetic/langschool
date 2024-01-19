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

    <?php
    /*###########################################################################
    ce code php permet de remettre les données déjà saisies par l'utilisateur lors d'une redirection vers le formulaire
     */
    $value="value=";
    $n="";
    $p="";
    $adr="";
    $num="";
    $mail="";
    if(isset($_GET['n'])){
        if($_GET['n']!=""){
            $n=$value.$_GET['n'];
        }
    }
    if(isset($_GET['p'])){
        if($_GET['p']!=""){
            $p=$value.$_GET['p'];
        }
    }
    if(isset($_GET['adr'])){
        if($_GET['adr']!=""){
            $adr=$value.$_GET['adr'];
        }
    }    
    if(isset($_GET['num'])){
        if($_GET['num']!=""){
            $num=$value.$_GET['num'];
        }
    }
    if(isset($_GET['mail'])){
        if($_GET['mail']!=""){
            $mail=$value.$_GET['mail'];
        }
    }
    ?>

    <form action="enregistrement.php" method="POST">
        <label for="n">Nom:</label>
        <input type="text" id="n" name="n" <?php echo $n ?>><br>

        <label for="p">Prénom:</label>
        <input type="text" id="p" name="p" <?php echo $p ?>><br>

        <label for="adr">Adresse:</label>
        <input type="text" id="adr" name="adr" <?php echo $adr ?>><br>

        <label for="num">Numéro de téléphone:</label>
        <input type="text" id="num" name="num" <?php echo $num ?>><br>

        <label for="mail">Adresse e-mail:</label>
        <input type="email" id="mail" name="mail" <?php echo $mail ?>><br>

        <label for="mdp1">Mot de passe:</label>
        <input type="password" id="mdp1" name="mdp1"><br>

        <label for="mdp2">Confirmer votre mot de passe:</label>
        <input type="password" id="mdp2" name="mdp2" ><br>

        <input type="submit" value="Enregistrer">
    </form>



</body>
<footer>
        <a href="../index.php">Acceuil</a>
</footer>


</html>
