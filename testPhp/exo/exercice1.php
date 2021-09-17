<?php
    require("configexo.php");
?>
<?php
$titre = 'Exercice1';
$enonce = 'Modifier le code ci-dessous pour calculer la moyenne des
notes.';



$msg = '$note_maths = 15;<br>
$note_francais = 12;<br>
$note_histoire_geo = 9;<br>
$moyenne = ( $note_maths+$note_francais+$note_histoire_geo )/3;<br>
return \'La moyenne est de .$moyenne./ 20.<br/>';


 
// // function moyenne(){
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
        <div class='code'><?=affmsg($msg)?></div>
        <div class='result'><?=moyenne()?></div>
    </div>    



