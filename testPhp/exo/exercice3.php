<?php
    require("configexo.php");
?>

<?php
    $titre = 'Exercice3';
    $enonce = 'En utilisant le tableau ci-dessous, compter le nombre d éléments du
    tableau.';


    $msg='  $pays_population = array(
        France => 67595000,"<br>"
        Suede => 9998000,"<br>"
        Suisse => 8417000,"<br>"
        Kosovo => 1820631,"<br>"
        Malte => 434403,"<br>"
        Mexique => 122273500,"<br>"
        Allemagne => 82800000,);"<br>"
    
        return Le tableau pays population contient .count($pays_population).';
  
?>


<h1 class='titre animate__animated animate__fadeIn'><?=$titre?></h1>
<p class='enonce animate__animated animate__fadeIn'><?=$enonce?></p>




    <div class="codebox animate__animated animate__fadeIn">
        <div class='code'><?=affmsg($msg)?></div>
        <div class='result'><?=tabpopulation()?></div>
    </div>    
  