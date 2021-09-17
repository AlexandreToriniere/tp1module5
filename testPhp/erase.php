 <!--Récupere les informations pour écrire le quizz -->
<form action="erase.php" method ="post" class="formulaire">
            <p> Nom quizz</p>
            <input type="text" name="name">
            <input type="submit" value="Valider">   
</form>   

<?php
require 'configexo.php';
erase();

?>