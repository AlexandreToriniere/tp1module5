<?php
 $note_maths = 15;
 $note_francais = 12;
 $note_histoire_geo = 9;
 $moyenne = ( $note_maths+$note_francais+$note_histoire_geo )/3;
 echo 'La moyenne est de '.$moyenne.' / 20.<br/>';//moyenne



 $prix_ht=50;
 $tva = 20;
 $prix_ttc = $prix_ht*(1+$tva /100);
 echo 'Le prix TTC du produit est de ' .$prix_ttc.'€.<br/>';//TTC


 $test="42";
 var_dump($test);

 $sexe ="mâle";
 if ($sexe == "mâle")// si le sexe est strictement égal à mâle
 {
     echo "Le sexe est mâle <br/>";
 }

 else// sinon
 {
     echo "Il ne s'agit pas d'un mâle <br/>" ;
 }

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

 $age = 15;
 if($age<18)
 {
     echo " C'est un mineur<br/>";
 }

 else if ($age>= 18)
 {
     echo " C'est un majeur<br/>";
 }

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


echo '<br/>';
echo 'Tableau cocktails <br/>';
echo '<br/>';

$cocktails = array('Mojito', 'Long Island
Iced Tea', 'Gin Fizz', 'Moscow mule');

echo 'Voici le second cocktail'.$cocktails[1].'.<br/>';



echo '<br/>';
echo 'Fonction Hello World <br/>';
echo '<br/>';
function HelloWorld()
{
      echo 'Hello World!';
}
HelloWorld();


echo '<br/>';
echo 'Je retourne mon argument <br/>';
echo '<br/>';
function jeRetourneMonArgument(){
    echo 'ABC!<br/>';
    echo 123;
    return;
}
jeRetourneMonArgument();



echo '<br/>';
echo 'Exo Antoine Griezmann<br/>';
echo '<br/>';
$ant='Antoine';
$griez='Griezmann';
function conca($ant,$griez){
    return  $ant.$griez;
       
}

echo conca($ant,$griez);


echo '<br/>';
echo 'Exo Fonction addition<br/>';

$arg1=5;
$arg2=5;
function addition($arg1,$arg2){
    return  $arg1+$arg1;
      
}
echo addition($arg1,$arg2);


echo '<br/>';
echo 'Exo Fonction soustraction<br/>';

$arg1=5;
$arg2=5;
function soustraction($arg1,$arg2){
    return  $arg1-$arg1;
      
}
echo soustraction($arg1,$arg2);



echo '<br/>';
echo 'Exo Fonction multiplication<br/>';

$arg1=5;
$arg2=5;
function multiplication($arg1,$arg2){
    return  $arg1*$arg1;
      
}
echo multiplication($arg1,$arg2);
?>  