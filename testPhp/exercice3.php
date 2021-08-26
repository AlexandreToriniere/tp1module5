<?php
$titre = 'Exercice3';
$enonce = 'En utilisant le tableau ci-dessous, compter le nombre d éléments du
tableau.';




 function affmsg(){
     $msg='  $pays_population = array(
        France => 67595000,"<br>"
        Suede => 9998000,"<br>"
        Suisse => 8417000,"<br>"
        Kosovo => 1820631,"<br>"
        Malte => 434403,"<br>"
        Mexique => 122273500,"<br>"
        Allemagne => 82800000,);"<br>"
    
        return Le tableau pays population contient .count($pays_population).';
   return $msg;
 }    


 
function moyenne(){
        $pays_population = array(
        'France' => 67595000,
        'Suede' => 9998000,
        'Suisse' => 8417000,
        'Kosovo' => 1820631,
        'Malte' => 434403,
        'Mexique' => 122273500,
        'Allemagne' => 82800000,
        );
    
        return 'Le tableau pays population contient '.count($pays_population).'éléments<br/>';
}

?>


<h1 class='titre animate__animated animate__fadeIn'><?=$titre?></h1>
<p class='enonce animate__animated animate__fadeIn'><?=$enonce?></p>




    <div class="codebox animate__animated animate__fadeIn">
        <div class='code'><?=affmsg()?></div>
        <div class='result'><?=moyenne()?></div>
    </div>    
  