<div>
    <p> Qui va sur des rails et fais tchou tchou?</p>
    <p>'Chat', 'Train','Bombe', 'Ailes' </p>
<form action="lebonmot.php?bonmot" method="get">
    <p>Trouvez le bon mot : <input type="text" name="bonmot" /></p>
    <p><input type="submit" value="Envoyer"></p>
</form>
</div>    

<?php
// function leBonMot(){
//     $array_mot = array('ailes', 'mains','wagon', 'zumba' );
//     $rand_mot = array_rand($array_mot, 1);
        

//         $rand_mot = strtr($rand_mot, 'e,i,a', '_,_,_');
//         echo $array_mot[$rand_mot];
//     } 

$bon_mot = 'train';

if (isset($_GET['bonmot'])){
    $user_choix_mot = $_GET['bonmot'];
        if($user_choix_mot == $bon_mot){
            include('index.php');
        echo 'Bien joué!';
    }

        else{
            include('index.php');
            echo 'Perdu!';
             
        }

       
    }        
            
?>