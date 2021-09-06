 <?php
    session_start();
 ?>
 
 <div>
     <p>Trouvez le bon chiffre entre 1 et 10 </p>
<form action="index.php?site=justeprix" method="post">
    <p>Tapez votre prix : <input type="text" name="prixR" /></p>
    <p><input type="submit" value="Envoyer"></p>
</form>
</div>    


<?php


    
    if (empty($_SESSION['prixalea'])){
        $_SESSION['prixalea'] = rand (0,5);
    }
    

   if(isset($_POST['prixR'])) {
    if ($_SESSION['prixalea'] == $_POST['prixR']){
        echo'c\'est gagné!';
        session_destroy();
    }
}

    else {
       echo 'c\'est perdu!';
    }







// $prix = rand(0,10);

// if (isset($_GET['prixR'])){
//     $user_choix = $_GET['prixR'];
//         if($user_choix< $prix){
//         echo 'C\'est plus!'.$prix;
//     }

//         elseif($user_choix> $prix){
//             echo 'C\'est moins!'.$prix;
             
//         }

//         elseif($user_choix == $prix){
//             echo 'Gagné!'.$prix;
            
//         }
//     }        
            
?>  