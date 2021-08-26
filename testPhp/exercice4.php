<?php
$titre = 'Exercice4';
$enonce = 'Créer une fonction qui s appelle concatenation().
Elle prendra deux arguments de type string.
Elle devra retourner la concatenation des deux.
Exemple : argument 1 = Antoine Argument 2 = Griezmann;
Resultat : AntoineGriezmann
';




 function affmsg(){
     $msg='$note_maths = 15;<br/>
    $note_francais = 12;<br/>
     $note_histoire_geo = 9;<br/>
    $moyenne = ( $note_maths+$note_francais+$note_histoire_geo )/3;<br>
     echo  $moyenne/ 20.<br/>';
   return $msg;
 }    


 
function moyenne(){
    $ant='Antoine';
    $griez='Griezmann';
    function conca($ant,$griez){
        return  $ant.$griez;
           
    }
    return conca($ant,$griez);
}

?>


<h1 class='titre animate__animated animate__fadeIn'><?=$titre?></h1>
<p class='enonce animate__animated animate__fadeIn'><?=$enonce?></p>




    <div class="codebox animate__animated animate__fadeIn">
        <div class='code'><?=affmsg()?></div>
        <div class='result'><?=moyenne()?></div>
    </div>    
     
