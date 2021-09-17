<?php
     session_start();
     require 'config.php';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
     .link{
    text-decoration: none;

}

.container {
    height: 100%;
    width: 100%;  
    display:flex;
    
    align-items: center;
}

.form{
    font-size: 25px;
}

    </style>
<body>

<a href="index.php" class="link">Accueil</a>
<a href="rewritefile.php" class="link">Correction</a>
<a href="erase.php" class="link">Supprimer</a>

<div class="container">
    <!--Récupere les informations pour écrire le quizz -->
    <form action="" method="post" class="form">
    <p>Donnez un nom à l'exercie</p>
    <input type="text" name="name" id="">
    <p>Donnez un ennoncé</p>
    <input type="text" name="ennonce" id="">
    <p>Réponse A</p>
    <input type="text" name="a" id="">
    <p>Réponse B</p>
    <input type="text" name="b" id="">
    <p>Réponse C</p>
    <input type="text" name="c" id="">
    <p>Réponse D</p>
    <input type="text" name="d" id="">
    <input type="submit" value="Valider">
    </form>
    </div>
<?php
// Crée le fichier XML
    if (isset($_POST['name']) && isset($_POST['ennonce']) && isset($_POST['a']) && isset($_POST['b']) && isset($_POST['c']) && isset($_POST['d'])) {
        $tabReponse = array($_POST['a'], $_POST['b'], $_POST['c'], $_POST['d']);

        // create_xml($_POST['name'], $_POST['ennonce'], $tabReponse);

        print_r(create_xml($_POST['name'], $_POST['ennonce'], $tabReponse));
        print_r(create_php($_POST['name']));
    }
    affxml();
    ?>
</body>    