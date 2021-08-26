<?php
 $note_maths = 15;
 $note_francais = 12;
 $note_histoire_geo = 9;
 $moyenne = ( $note_maths+$note_francais+$note_histoire_geo )/3;
 echo 'La moyenne est de '.$moyenne.' / 20.<br/>';//moyenne

?> 

<?php
 $prix_ht=50;
 $tva = 20;
 $prix_ttc = $prix_ht*(1+$tva /100);
 echo 'Le prix TTC du produit est de ' .$prix_ttc.'€.<br/>';//TTC
 ?> 


<?php
 $test="42";
 var_dump($test);
?> 


<?php
 $sexe ="mâle";
 if ($sexe == "mâle")// si le sexe est strictement égal à mâle
 {
     echo "Le sexe est mâle <br/>";
 }

 else// sinon
 {
     echo "Il ne s'agit pas d'un mâle <br/>" ;
 }
 ?> 



<?php
 $budget = 553.89;
 $achats = 1554.76;

 if($budget >= $achats)
 {
     echo " Le budget est suffisant<br/>";
 }

 else 
 {
     echo " Le budget n'est pas suffisant<br/>";
 }
 ?> 




<?php
 $age = 15;
 if($age<18)
 {
     echo " C'est un mineur<br/>";
 }

 else if ($age>= 18)
 {
     echo " C'est un majeur<br/>";
 }
 ?> 


 <?php
 $heure = 20;
 if($heure > 0 && $heure < 12)
 {
     echo " c'est le matin<br/>";
 }

 else if ($heure > 12 && $heure < 18)

 {
     echo " C'est l'après midi<br/>";
 }

 else if ($heure > 18 && $heure < 24)

 {
    echo " C'est le soir <br/>";
}
 ?> 



 <?php
 $multc=0;
 $multic=0;
 for( $multic = 0; $multic <=10; $multic++)
{
    
    echo 'On est au n°' . $multc . '<br/>';
    $multc += 5;
}

echo '<br/>';
echo 'Exercice  html <br/>';
echo '<br/>';
$newval = 0;
while($newval <= 20)
{
    echo 'On est au n°' . $newval . '<br/>';

     if($newval == 10){
        echo 'On est au n°<strong>' . $newval . '</strong>';
     } 

    $newval += 2; 
}
?> 


<?php
echo '<br/>';
echo 'tableaux pays<br/>';
$newtab = array(
    'France' => 'Paris',
    'Allemagne' => 'Berlin',
    'Italie' => 'Rome');

foreach ($newtab as $cle => $element)
    {
        echo'[' . $cle. '] vaut' .$element. '<br/>';
    }    

echo '<br/>';
echo 'tableaux rand <br/>';
echo '<br/>';
$tableau = array(0,1,2,3,4,5,6,7,8,9);
echo "Le tableau contient ".count($tableau)."éléments";
echo'<pre>';
print_r($tableau);
echo '</pre>';
    foreach ($tableau as $cle => $element)
        {
            echo'[' . $cle. '] vaut' .$tableau [] = rand(0, 50). '<br/>';

            if (in_array(42, $tableau))
        {
            echo 'La valeur 42 se trouve dans le tableaux <br/>';
        }
        
    else
    {
        echo 'La valeur 42 ne se trouve pas dans le tableaux <br/>';
    }
}    
?> 


<?php
/*
echo '<br/>';
echo 'tableaux rand2 <br/>';
echo '<br/>';

$tabtri = array(0,1,2,3,4,5,6,7,8,9);
    foreach ($tabtri as $cle => $element)
        {   
            echo'[' . $cle. '] vaut' .$tabtri [] = rand(0, 50). '<br/>';
            $tabtrisup = array(0,1,2,3,4,5,6,7,8,9);
            $tabtriinf = array(0,1,2,3,4,5,6,7,8,9);
            if($tabtri[]<50)
            {
                $tabri[] => $tabtriinf[];
            }
*/
?> 



<?php
echo '<br/>';
echo 'Nombre elements tableau <br/>';
echo '<br/>';

    $pays_population = array(
    'France' => 67595000,
    'Suede' => 9998000,
    'Suisse' => 8417000,
    'Kosovo' => 1820631,
    'Malte' => 434403,
    'Mexique' => 122273500,
    'Allemagne' => 82800000,
    );

    echo 'Le tableau pays population contient '.count($pays_population).'éléments<br/>';
    ?> 


<?php
echo '<br/>';
echo 'Tableau cocktails <br/>';
echo '<br/>';

$cocktails = array('Mojito', 'Long Island
Iced Tea', 'Gin Fizz', 'Moscow mule');

echo 'Voici le second cocktail'.$cocktails[1].'.<br/>'
?> 


<?php
echo '<br/>';
echo 'Fonction Hello World <br/>';
echo '<br/>';
function HelloWorld()
{
      echo 'Hello World!';
}
HelloWorld();
?> 


<?php
echo '<br/>';
echo 'Je retourne mon argument <br/>';
echo '<br/>';
function jeRetourneMonArgument(){
    $arg ='ABC';
    if($arg =='ABC'){
        return 'abc<br/>';
    }
    if($arg =='123')
    return '123<br/>';
    
}
jeRetourneMonArgument();
?>

<?php
echo '<br/>';
echo 'Exo Antoine Griezmann<br/>';
echo '<br/>';
$ant='Antoine';
$griez='Griezmann';
function conca($ant,$griez){
    return  $ant.$griez;
       
}
echo conca($ant,$griez);
?>


<?php
echo '<br/>';
echo 'Exo Fonction addition<br/>';

$arg1=5;
$arg2=5;
function addition($arg1,$arg2){
    return  $arg1+$arg1;
      
}
echo addition($arg1,$arg2);
?>


<?php
echo '<br/>';
echo 'Exo Fonction soustraction<br/>';

$arg1=5;
$arg2=5;
function soustraction($arg1,$arg2){
    return  $arg1-$arg1;
      
}
echo soustraction($arg1,$arg2);
?>

<?php
echo '<br/>';
echo 'Exo Fonction multiplication<br/>';

$arg1=5;
$arg2=5;
function multiplication($arg1,$arg2){
    return  $arg1*$arg1;
      
}
echo multiplication($arg1,$arg2);
?>


<?php
echo '<br/>';
echo 'Exo Fonction division<br/>';
echo '<br/>';
$arg1=5;
$arg2=5;
function division($arg1,$arg2){
    return  $arg1/$arg1;
      
}
echo division($arg1,$arg2);
?>


<?php
echo '<br/>';
echo 'Exo Fonction estIlMajeure<br/>';
echo '<br/>';
$age1 = 32;
function estIlMajeure($age1, $age2){

    if($age1 > 18)
    {
       echo 'Il est majeur';
       return (TRUE); 
       
    }
   
    else 
    {
        echo 'Il est mineur';
        return(False);
        
    }
}

echo estIlMajeure($age1, $age2);
?>

<?php
echo '<br/>';
echo 'Exo Fonction tableau<br/>';
echo '<br/>';
function premierElementTableau(){
    $newtableau=array('Enzo','michel', 'alex', 'julien', 'franck', 'gerard');
        return var_dump ($newtableau[0]);
    }

return premierElementTableau();
?>


<?php
echo '<br/>';
echo 'Exo Le plus grand<br/>';
echo '<br/>';
function plusGrand(){
    $arr_grand= array(5,17,69,78,20);
    $turn=0;

    while($turn<5)
    {
        echo max($arr_grand);
        return;
    }
}
echo plusGrand() .'est le chiffre le plus grand';

?>

<?php
echo '<br/>';
echo 'Exo VerificationMDP<br/>';
echo '<br/>';
function verificationPassword(){
    $pswrd ='bilibilibili';
    if(strlen($pswrd)>=8)
    return (TRUE);
    else{
        return (FALSE);
    }
}

echo verificationPassword();
?>


<?php
echo '<br/>';
echo 'Exo VerificationMDP2.0<br/>';
echo '<br/>';
function verificationPassword2(){
    $pswrd1 ='8aE64646464';
    
    if(preg_match('#^[a-zA-Z0-9]+$#', $pswrd1) && strlen($pswrd1)>=8)
    {
        return (TRUE);}


    else{
        return (FALSE);
    } 
}

var_dump(verificationPassword2());
echo '<br/>';
?>


<?php
echo '<br/>';
echo 'fonction capitale<br/>';
echo '<br/>';
 
function capital(){
    $pays = 'Allemagne';
    switch($pays)
    {
        case 'France':
            return 'Paris';
        break;    
    
        case 'Allemagne':
            return 'Berlin';
        break;    
       

        case 'Italie':
            return 'Rome';
        break;    
       
        case 'Maroc':
            return 'Rabat';
        break;    
    
        case 'Portugal':
            return 'Lisbonne';
        break;    
    
        case 'Angleterre':
            return 'Londres';
        break;      
  
        default:
        return 'Inconnu';
        break;  
        }
    } 
    
var_dump( capital()) ;
echo '<br/>'; 
?>

<?php
echo '<br/>';
echo 'Fonction liste html<br/>';
echo '<br/>';
function listhtml(){
    $tablist = ['france', 'allemagne', 'espagne', 'italie'];
    $listname = 'pays';
    $count = 3;
    echo '<h3>'.$listname.'</h3>';/*Mettre en titre*/

    foreach ($tablist as $items) {
    echo "<li>" ;
    echo $items;
    echo "</li>";
$count ++;
}
    if($listname ==''){
        return (null);
    }
}

echo listhtml();
?>


<?php
echo '<br/>';
echo 'Fonction remplacerLesLettres<br/>';
echo '<br/>';
function remplacerLesLettres($replace){
    $replace = strtr($replace, 'e,i,o', '3,1,0');
    return $replace;
}

    echo "<br><br>".remplacerLesLettres("Bonjour les amis")."<br><br>";
?>

<?php
echo '<br/>';
echo 'Fonction quelledate<br/>';
echo '<br/>';
function quelleDate($date){
    $date = new DateTime('');
    return $date->format('d-m-Y');
}

echo "<br><br>".quelleDate('23/08/2021')."<br><br>";
?>

