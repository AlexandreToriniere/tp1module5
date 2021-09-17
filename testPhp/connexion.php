<?php


session_start();

require('config.php');

// get_users();
if(isset($_POST['log']) && isset($_POST['pwd'])){//initialise les deux variables
    if(testconnection( $_POST['log'], $_POST['pwd'])){/*Test de connexion*/
        if(empty($_SESSION['connecte']) || $_SESSION['connecte'] != 'oui'){ /*Test de variable de session*/
            require_once 'form.php';
            echo '<br>Mot de passe incorrect';
        }elseif ($_SESSION['connecte'] = 'oui'){
            header('Location: index.php');
            }    
        }  

    else{
        require_once 'form.php';
    }
}

else{
    require_once 'form.php';
}
?>  
 