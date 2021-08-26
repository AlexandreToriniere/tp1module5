<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
     <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
    <title>Projet Php</title>
</head>
<body>
<div class="container">
        <div class="row">
            <div class="col-4 " >
                 <?php                
                    include_once("menu.php");
                ?>
            </div>  
        <div class="col-8">
            <div class >
                <?php
                    if (isset($_GET['site'])) { /*si la variable $_GET['site'] existe.*/ 
                        switch ($_GET['site']) {
                            case 'exercice1':
                                include_once("exercice1.php");
                                break;
                            case 'exercice2':
                                include_once("exercice2.php");
                                break;
                            case 'exercice3':
                                include_once("exercice3.php");
                                break;
                            case 'exercice4':
                                include_once("exercice4.php");
                                break;
                            case 'exercice5':
                                include_once("exercice5.php");
                                break;
                            case 'exercice6':
                                include_once("exercice6.php");
                                break;
                            case 'exercice7':
                                include_once("exercice7.php");
                                break;
                            case 'exercice8':
                                include_once("exercice8.php");
                                break;
                            case 'exercice9':
                                include_once("exercice9.php");
                                break;                               
                            case 'exercice10':
                                include_once("exercice10.php");
                                break;    
                                
                            default:
                                echo '404 error';
                                break;
                        }
                    }
                ?>
              
            </div>
            
        </div>
        
</div>   
<!-- JavaScript Bundle with Popper -->
</body>
</html>

</body>
</html>