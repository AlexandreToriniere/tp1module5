<?php
    require("configexo.php");
?>


<?php
    $titre = 'Exercice4';
    $enonce = 'Créer une fonction qui s appelle concatenation().
    Elle prendra deux arguments de type string.
    Elle devra retourner la concatenation des deux.
    Exemple : argument 1 = Antoine Argument 2 = Griezmann;
    Resultat : AntoineGriezmann';




 
     $msg='Créer une fonction qui s\'appelle quelleDate(). Elle devra
     retourner une string représentant la date actuelle sous le
     format suivant DD/MM/YYYY
     Où DD représente le jour actuelle, MM le mois actuel et YYYY
     l\'année actuelle.
     Les valeurs doivent être numérique et non au format String';


?>


<h1 class='titre animate__animated animate__fadeIn'><?=$titre?></h1>
<p class='enonce animate__animated animate__fadeIn'><?=$enonce?></p>




    <div class="codebox animate__animated animate__fadeIn">
        <div class='code'><?=affmsg($msg)?></div>
        <div class='result'><?=quelleDate('23/08/2021')?></div>
    </div>    
     
