<a href="index.php">Accueil</a>
    <!--Récupere les informations pour écrire le quizz -->
        <form action="rewritefile.php" method ="post" class="formulaire">
            <p> Nom quizz</p>
            <input type="text" name="name">
            <p>Enoncé<p>
            <textarea rows="5" cols="33" name="ennonce"> Tapez le nouveau énoncé ici  </textarea>
            <input type="submit" value="Valider">   
        </form>    

<?php
require 'configexo.php';
rewritefile();
?>