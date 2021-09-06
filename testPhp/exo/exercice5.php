<?php
    require("configexo.php");
?>

<?php
$titre = 'Exercice 5';
$enonce = 'Créer une fonction qui s\'appelle concatenation().
Elle prendra deux arguments de type string.
Elle devra retourner la concatenation des deux.
Exemple : argument 1 = Antoine Argument 2 = Griezmann;
Resultat : AntoineGriezmann
';




     $msg='$ant= \'Antoine\';<br>
     $griez= \'Griezmann\';<br>
     function conca($ant,$griez){<br>
         return  $ant.$griez;<br>
            
     }<br>
     echo conca($ant,$griez);';
  

 $ant='Antoine';
 $griez='Griezmann';
 
?>


<h1 class='titre animate__animated animate__fadeIn'><?=$titre?></h1>
<p class='enonce animate__animated animate__fadeIn'><?=$enonce?></p>




    <div class="codebox animate__animated animate__fadeIn">
        <div class='code'><?=affmsg($msg)?></div>
        <div class='result'><?=conca($ant, $griez)?></div>
    </div>    

