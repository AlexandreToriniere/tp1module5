<?php
function listechapitre(){
 if (isset($_GET['chapitre'])) { /*si la variable $_GET['site'] existe.*/ 
    switch ($_GET['chapitre']) {
        case 'chapitre1':
            include_once("chapitres/chapitre1.php");
            break;
        case 'chapitre2':
            include_once("chapitres/chapitre2.php");
            break;
        case 'chapitre3':
            include_once("chapitres/chapitre3.php");
            break;
        case 'chapitre4':
            include_once("chapitres/chapitre4.php");
            break;
        case 'chapitre5':
            include_once("chapitres/chapitre5.php");
            break;
        case 'chapitre6':
            include_once("chapitres/chapitre6.php");
            break;
        case 'chapitre7':
            include_once("chapitres/chapitre7.php");
            break;
        case 'chapitre8':
            include_once("chapitres/chapitre8.php");
            break;
        case 'chapitre9':
            include_once("chapitres/chapitre9.php");
            break;                               
        case 'chapitre10':
            include_once("chapitres/chapitre10.php");
            break;
        case 'justeprix':
            include_once("justeprix.php");
                break;            
        default:
            echo '404 error';
            break;
       }
    }
}     
?>