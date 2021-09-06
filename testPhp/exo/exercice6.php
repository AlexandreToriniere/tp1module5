<?php
    require("configexo.php");
?>

<?php
$titre = 'Exercice6';
$enonce = 'Créer une fonction qui sappelle somme(). Elle prendra deux
arguments de type int.
Elle devra retourner la somme des deux.';





     $msg='$arg1=5;<br/>
           $arg2=5;<br/>
           function addition($arg1,$arg2){<br/>
           return  $arg1+$arg1;<br/>
           
     }<br/>"
     echo addition($arg1,$arg2);<br/>';
   


 

    $arg1=5;
    $arg2=5;

?>



<h1 class='titre animate__animated animate__fadeIn'><?=$titre?></h1>
<p class='enonce animate__animated animate__fadeIn'><?=$enonce?></p>




    <div class="codebox animate__animated animate__fadeIn">
        <div class='code'><?=affmsg($msg)?></div>
        <div class='result'><?=addition($arg1,$arg2)?></div>
    </div>    
