<?php

session_start();


if($_SESSION['connecte'] = 'oui' || $_SESSION['connecte'] = 'non' ){
    session_destroy();
    header('Location: index.php');
}

?>