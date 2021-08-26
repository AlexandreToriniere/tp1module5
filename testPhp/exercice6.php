<?php
$titre = 'Exercice6';
$enonce = 'Créer une fonction qui sappelle somme(). Elle prendra deux
arguments de type int.
Elle devra retourner la somme des deux.';




 function affmsg(){
     $msg='$arg1=5;<br/>
           $arg2=5;<br/>
           function addition($arg1,$arg2){<br/>
           return  $arg1+$arg1;<br/>
           
     }<br/>"
     echo addition($arg1,$arg2);<br/>';
   return $msg;
 }    


 
function moyenne(){
    $arg1=5;
    $arg2=5;
    function addition($arg1,$arg2){
        return  $arg1+$arg1;
          
    }
    return addition($arg1,$arg2);
}

?>



<h1 class='titre animate__animated animate__fadeIn'><?=$titre?></h1>
<p class='enonce animate__animated animate__fadeIn'><?=$enonce?></p>




    <div class="codebox animate__animated animate__fadeIn">
        <div class='code'><?=affmsg()?></div>
        <div class='result'><?=moyenne()?></div>
    </div>    
