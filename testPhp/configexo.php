<?php /*Fonction exo*/
function affmsg($msg){
   return $msg;
 }
 
 
function getquizz($quizz){
    $quizz = simplexml_load_file('../testPhp/chapitres/'.$_GET['chapitre'].'.xml');
    //print_r($quizz) ouvre le fichier;
    foreach ($quizz as $ennonce) { ?>
    
         <?= $ennonce ?> <br/>
    <?php
      }
    }



?>

 <?php
 function moyenne(){  
    $prix_ht=50;
    $tva = 20;
    $prix_ttc = $prix_ht*(1+$tva /100);
    return 'Le prix TTC du produit est de ' .$prix_ttc.'€.<br/>';//TTC
}
?>


 <?php
function tva(){  
    $prix_ht=50;
    $tva = 20;
    $prix_ttc = $prix_ht*(1+$tva /100);
    return 'Le prix TTC du produit est de ' .$prix_ttc.'€.<br/>';//TTC    
}
?>

<?php
function tabpopulation(){
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



<?php
function conca($ant,$griez){
    $ant='Antoine';
    $griez='Griezmann';
        return  $ant.$griez;      
    }
?>


<?php
    $arg1=5;
    $arg2=5;
    function addition($arg1,$arg2){
        return  $arg1+$arg1;     
    }
?>



<?php
function verificationPassword(){
    $pswrd ='bilibilibili';
    if(strlen($pswrd)>=8){
    return (TRUE);
}else{
        return (FALSE);
    }
}
?>

<?php
 function verificationPassword2(){
    $pswrd1 ='8aE64646464';
    
    if(preg_match('#^[a-zA-Z0-9]+$#', $pswrd1) && strlen($pswrd1)>=8){
        return (TRUE);}
    else{
        return (FALSE);
    }  
}
?>


<?php
function remplacerLesLettres($replace){
    $replace = strtr($replace, 'e,i,o', '3,1,0');
    return $replace;
} 
?>

<?php
function quelleDate($date){
    $date = new DateTime('');
    return $date->format('d-m-Y');
}
?>


<?php
function plusGrand(){
    $arr_grand= array(5,17,69,78,20);
    $turn=0;

    while($turn<5)
    {
        echo max($arr_grand);
        return;
    }
}
?>

<?php
function getxml(){
    $quizz = simplexml_load_file('../testPhp/exo1.xml');
//print_r($quizz) ouvre le fichier;
foreach ($quizz as $ennonce) { ?>

    <h1 class="titre">Ennoncé :</h1> <?= $ennonce ?> <br/>
<?php
  }
}

?>