<?php
    require("configexo.php");
?>
<?php
$titre = 'Exercice 2';
$enonce = 'Calculer le prix TTC du produit.';




 
$msg = '$prix_ht=50;<br/>
$tva = 20;<br/>
$prix_ttc = $prix_ht*(1+$tva /100);<br/>
return \'Le prix TTC du produit est de .$prix_ttc.€<br/>;';
?>




<h1 class='titre animate__animated animate__fadeIn'><?=$titre?></h1>
<p class='enonce animate__animated animate__fadeIn'><?=$enonce?></p>




    <div class="codebox animate__animated animate__fadeIn">
        <div class='code'><?=affmsg($msg)?></div>
        <div class='result'><?=tva()?></div>
    </div>    
 