<?php
$titre = 'Exercice 7';
$enonce = 'Créer une fonction qui s"appelle plusGrand().
Elle prendra un argument de type array.
Elle devra retourner le plus grand des élements présent dans
l"array.
Si l"array est vide, il faudra retourner null';




 function affmsg(){
     $msg='  function plusGrand(){<br>
        $arr_grand= array(5,17,69,78,20);<br>
        $turn=0;<br>
    
        while($turn<5)
        {<br>
            return max($arr_grand);<br>
        }<br>
    }<br>
    return plusGrand() ."est le chiffre le plus grand";';
   return $msg;
 }    


 
function moyenne(){
    function plusGrand(){
        $arr_grand= array(5,17,69,78,20);
        $turn=0;
    
        while($turn<5)
        {
            return max($arr_grand);
            ;
        }
    }
    return plusGrand() .'est le chiffre le plus grand';;
}

?>



<h1 class='titre animate__animated animate__fadeIn'><?=$titre?></h1>
<p class='enonce animate__animated animate__fadeIn'><?=$enonce?></p>




    <div class="codebox animate__animated animate__fadeIn">
        <div class='code'><?=affmsg()?></div>
        <div class='result'><?=moyenne()?></div>
    </div>    
     