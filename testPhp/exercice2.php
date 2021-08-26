
<?php
$titre = 'Exercice 2';
$enonce = 'Calculer le prix TTC du produit.';




 function affmsg(){
     $msg='
     $prix_ht=50;"<br/>"
     $tva = 20;"<br/>"
     $prix_ttc = $prix_ht*(1+$tva /100);"<br/>"
     echo Le prix TTC du produit est de  .$prix_ttc.€."<br/>"';
   return $msg;
 }    


 
function moyenne(){  
    $prix_ht=50;
    $tva = 20;
    $prix_ttc = $prix_ht*(1+$tva /100);
    return 'Le prix TTC du produit est de ' .$prix_ttc.'€.<br/>';//TTC
    
}
?> 




<h1 class='titre animate__animated animate__fadeIn'><?=$titre?></h1>
<p class='enonce animate__animated animate__fadeIn'><?=$enonce?></p>




    <div class="codebox animate__animated animate__fadeIn">
        <div class='code'><?=affmsg()?></div>
        <div class='result'><?=moyenne()?></div>
    </div>    
 