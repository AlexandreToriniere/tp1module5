<?php
    require("configexo.php");
?>
<?php
$titre = 'Exercice1';
$enonce = 'Modifier le code ci-dessous pour calculer la moyenne des
notes.';



$quizz = simplexml_load_file('../testPhp/exo1.xml');
//print_r($quizz) ouvre le fichier;
foreach ($quizz as $ennonce) { ?>

    <h1 class="titre">Ennoncé :</h1> <?= $ennonce ?> <br/>
<?php
  }



 
// function moyenne(){
//    $note_maths = 15;
//     $note_francais = 12;
//     $note_histoire_geo = 9;
//     $moyenne = ( $note_maths+$note_francais+$note_histoire_geo )/3;
//     return 'La moyenne est de '.$moyenne.' / 20.<br/>';//moyenne
// }

?>


<h1 class='titre animate__animated animate__fadeIn'><?=$titre?></h1>
<p class='enonce animate__animated animate__fadeIn'><?=$enonce?></p>




    <div class="codebox animate__animated animate__fadeIn">
        <div class='code'><?=affmsg($quizz)?></div>
        <div class='result'><?=moyenne()?></div>
    </div>    



