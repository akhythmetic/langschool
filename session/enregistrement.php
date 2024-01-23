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
    function enregistrer($nom, $prenom, $adresse, $numero, $mail, $mdp) {//patch SQLi Input Validation
        /*
        Rôle : Enregistre les données de l'utilisateur dans la base de données.
        Entrées : Chaînes de caractères correspondant aux saisies de l'utilisateur.
        Sortie : Aucune.
        */
    
        // Inclure le fichier PHP contenant la fonction de connexion à la BD.
        include '../bd.php';
    
        // Se connecter à la BD.
        $bdd = getBD();
    
        // Préparer la requête SQL avec des paramètres.
        $query = $bdd->prepare("INSERT INTO Clients (nom, prenom, adresse, numero, mail, mdp) VALUES (?, ?, ?, ?, ?, ?)");
    
        // Exécuter la requête avec les paramètres sécurisés.
        try {
            $query->execute([$nom, $prenom, $adresse, $numero, $mail, $mdp]);
        } catch (PDOException $e) {
            // Gérer l'erreur de requête de la base de données.
            die('Une erreur est survenue. Veuillez réessayer plus tard.');
        }
    }
    
    //#############################################################################################################

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
            $mdp_hashe = password_hash($_POST['mdp1'], PASSWORD_DEFAULT);
            enregistrer($_POST['n'], $_POST['p'], $_POST['adr'], $_POST['num'], $_POST['mail'], $mdp_hashe);
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
</footer>


</html>
