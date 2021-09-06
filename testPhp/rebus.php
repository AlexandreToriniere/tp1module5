<div>
<form action="lebonmot.php?bonmot" method="get">
    <p>Trouvez le bon mot : <input type="text" name="rebus" /></p>
    <p><input type="submit" value="Envoyer"></p>
</form>
</div>
<div> <img src="rebus4-coccinelle.png" class='rebus'><div>    

<?php
// function leBonMot(){
//     $array_mot = array('ailes', 'mains','wagon', 'zumba' );
//     $rand_mot = array_rand($array_mot, 1);
        

//         $rand_mot = strtr($rand_mot, 'e,i,a', '_,_,_');
//         echo $array_mot[$rand_mot];
//     } 

$reponse = 'coccinelle';

if (isset($_GET['rebus'])){
    $user_choix_mot = $_GET['rebus'];
        if($user_choix_mot == $reponse){
        echo 'Bien joué!';
    }

        else{
            echo 'Perdu!';
             
        }

       
    }  