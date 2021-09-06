<?php
function listeexo(){
 if (isset($_GET['site'])) { /*si la variable $_GET['site'] existe.*/ 
    switch ($_GET['site']) {
        case 'exercice1':
            include_once("exo/exercice1.php");
            break;
        case 'exercice2':
            include_once("exo/exercice2.php");
            break;
        case 'exercice3':
            include_once("exo/exercice3.php");
            break;
        case 'exercice4':
            include_once("exo/exercice4.php");
            break;
        case 'exercice5':
            include_once("exo/exercice5.php");
            break;
        case 'exercice6':
            include_once("exo/exercice6.php");
            break;
        case 'exercice7':
            include_once("exo/exercice7.php");
            break;
        case 'exercice8':
            include_once("exo/exercice8.php");
            break;
        case 'exercice9':
            include_once("exo/exercice9.php");
            break;                               
        case 'exercice10':
            include_once("exo/exercice10.php");
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