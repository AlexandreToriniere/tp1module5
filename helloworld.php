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
?>


