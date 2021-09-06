<?php
     session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .titreexo{
            color: blue;  
        }

    </style>
<body>

<a href="index.php">Accueil</a>
    <!--Récupere les informations pour écrire le quizz -->
        <form action="admin.php" method ="post" class="formulaire">
            <p> Nom quizz</p>
            <input type="text" name="name">
            <p>Enoncé<p>
            <textarea rows="5" cols="33" name="ennonce"> Tapez votre enoncé ici  </textarea>
            <input type="submit" value="Valider">   
        </form>    

<?php


        if(isset($_POST['ennonce'])){
            $fichier = fopen($_POST['name'].'.xml', 'a+');//Tente d'ouvir le fichier et s'il n'existe pas en crée un de ce nom

            $xml = new XMLWriter();
            $xml->openURI($_POST['name'].'.xml');//Permet d'ouvrir le nouveau fichier xtml
            $xml -> startElement('quizz');//Crée le premier noeud
            $xml ->writeElement('enonce', $_POST['ennonce']);//Crée un noeud dans le premier noeud
            $xml->endElement();//Met fin au premier noeud
            $xml->flush();//Compile le tout

        $quizz = simplexml_load_file($_POST['name'].'.xml');
        //print_r($quizz) ouvre le fichier;
        foreach ($quizz as $ennonce) { ?>

            <h1 class="titre">Ennoncé :</h1> <?= $ennonce ?> <br/>
     <?php
          }

        }
?>
</body>    