<?php

/* Test de connection*/ 
function testconnection($log, $pwd){
    if($log == 'admin' && $pwd == 'admin'){
        $_SESSION['profil'] = 'Admin';
        $_SESSION['connecte'] = 'oui';
        //  header('Location: connexion.php');     
    }else{
        return 'false';
    }
} 
?>

