<?php
    require("configexo.php");
?>
<?php
$titre = 'Exercice 2';
$enonce = 'Calculer le prix TTC du produit.';




 
$msg = fopen('../testPhp/exo2.xml','a+');;
?>




<h1 class='titre animate__animated animate__fadeIn'><?=$titre?></h1>
<p class='enonce animate__animated animate__fadeIn'><?=$enonce?></p>




    <div class="codebox animate__animated animate__fadeIn">
        <div class='code'><?=affmsg($msg)?></div>
        <div class='result'><?=tva()?></div>
    </div>    
 