<?php /*Fonction exo*/
function affmsg($msg){
   return $msg;
 }
 
?>

 <?php
 function moyenne(){  
    $note_maths = 15;
    $note_francais = 12;
    $note_histoire_geo = 9;
    $moyenne = ( $note_maths+$note_francais+$note_histoire_geo )/3;
    echo 'La moyenne est de '.$moyenne.' / 20.<br/>';//moyenne
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
    $pays_population = array(//tableau associatif
    'France' => 67595000,
    'Suede' => 9998000,
    'Suisse' => 8417000,
    'Kosovo' => 1820631,
    'Malte' => 434403,
    'Mexique' => 122273500,
    'Allemagne' => 82800000,
    );

    return 'Le tableau pays population contient '.count($pays_population).'éléments<br/>';// Compte tous les éléments d'un tableau
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
function addition(){
    $arg1=5;
    $arg2=5;
        return  $arg1+$arg1;     
}   
?>



<?php
function verificationPassword(){
    $pswrd ='bilibilibili';
    if(strlen($pswrd)>=8){//définit un nombre définit de caractère autorisé
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
//fonction rewritefile
function rewritefile(){
    if(isset($_POST['ennonce'])){
        $fichier = fopen('chapitres/' . $_POST['name'].'.xml', 'w+');//Si le fichier existe, les informations existantes seront supprimées. S’il n’existe pas, crée un fichier.

      $xml = new XMLWriter();
            $xml->openMemory();//Mets le fichier en tampon
            $xml -> startElement('quizz');//Crée le premier noeud
            $xml ->writeElement('enonce', $_POST['ennonce']);//Crée un noeud dans le premier noeud
            $xml->endElement();//Met fin au premier noeud
            $xml2 = $xml-> outputMemory(true);//Compile le tout

            fputs($fichier, $xml2);
            fclose($fichier);
    }
}

?>


<?php
    function erase(){
        if(isset($_POST['name'])){
            $fichierDel = ('chapitres/' . $_POST['name'].'.xml');//Récupère le ficher désigné dans le formulaire
            if(unlink($fichierDel)){// Fonction qui permet d'effacer un fichier
                echo 'Le fichier' . $fichierDel . 'a bien été effacé';
            }

            else {
                echo 'Le fichier' . $fichierDel .' n\'a pas été effacé';
         }
    }
}
?>