<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enregistrement</title>
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="icon" href="../images/langue.png" type="image/png">

    <?php
    //#############################################################################################################
    function enregistrer($n,$p,$adr,$num,$mail,$mdp){
        /*
        Role : enregistre la data de l'utilisateur dans la base de donnée
        Entrée : des chaines de charactere correspondant à l'entré de l'utilisateur
        Sortie : aucun
         */
        //importer le fichier php qui contient la fonction pour se connecter à la bd
        include '../bd.php';
        //se connecter à la bd
        $bdd = getBD();
        //envoyer la requette
        try {
            $rep = $bdd->query("INSERT INTO Clients (nom, prenom, adresse, numero, mail, mdp) VALUES ('".$n."', '".$p."', '".$adr."', '".$num."', '".$mail."', '".$mdp."');");
        }
        catch (PDOException $e) {
            // Handle database query error
            die("Database error: " . $e->getMessage());
        }
    }
    /*###################################
    on verifie si tous l'une des variables est vide ou que mdp1 et mdp2 soit différent.
    si vrai : redirection vers "nouveau.php"
    si faux : redirection vers "index.php"
     */
    $redirind="<meta http-equiv='refresh' content='1;url=../index.php'>"; //balise de redirection vers index
    $redirnou="<meta http-equiv='refresh' content='1;url=nouveau.php'>"; //balise de redirection vers nouveau
    $redirnouD="<meta http-equiv='refresh' content='1;url=nouveau.php?"; //balise de redirection vers nouveau sans la fin pour ajouter la donnée de l'utilisateur ultérieurement
    if(isset($_POST['n']) && isset($_POST['p']) && isset($_POST['adr']) && isset($_POST['num']) && isset($_POST['mail']) && isset($_POST['mdp1']) && isset($_POST['mdp2'])){
        $flag_mdp=($_POST['mdp1']==$_POST['mdp2']);// drapeau vrai pour mdp1 et mdp2 identique
        if($_POST['n']!="" && $_POST['p']!="" && $_POST['adr']!="" && $_POST['num']!="" && $_POST['mail']!="" && $_POST['mdp1']!="" && $_POST['mdp2']!="" && $flag_mdp){
            enregistrer($_POST['n'],$_POST['p'],$_POST['adr'],$_POST['num'],$_POST['mail'],$_POST['mdp1']);//fonction créé plus haut
            echo $redirind;
        }
        else{
            echo $redirnouD."n=".$_POST['n']."&"."p=".$_POST['p']."&"."adr=".$_POST['adr']."&"."num=".$_POST['num']."&"."mail=".$_POST['mail']."'>";
        }
    }
    else{
        echo $redirnou;
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
        <a href="../index.php">Acceuil</a>
</footer>


</html>
