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
    <?php
    session_start();
    ?>
    <div class="text-decoration-none">
        <?php
            if(isset($_SESSION['profil']) && isset($_SESSION['connecte'])){
        
                if( $_SESSION['connecte'] != 'oui' || empty($_SESSION['connecte']) ){
                    echo  'connectez vous';
                }
                else if($_SESSION['connecte'] = 'oui'){
                    print_r($_SESSION['profil']) ;
                    echo ' est connecté';
                    echo "<a href='admin.php' class='text-decoration-none'> Admin</a>"; 
                    echo "<a href='chapitre.php' class='text-decoration-none'>Chapitres</a>";
                    echo "<a href='quizz.php' class='text-decoration-none'> Quizz</a>"; 
                    echo "<a href='déconnexion.php' class='text-decoration-none'>déconnexion</a>";
                } 
        }
        ?>
         
         <a href='connexion.php' class='text-decoration-none'>connexion</a>
        
    </div>  
    
       

    <div class="container h-100  ">
            <div class="row">
                <div class="col-4" >
                    <?php   
                    if(isset($_SESSION['profil']) && isset($_SESSION['connecte'])){
                        if( $_SESSION['connecte'] != 'oui' || empty($_SESSION['connecte']) ) {    
                            echo 'connectez vous!!!'; 
                            }else{
                                require ('menu.php');
                            }
                        }    
                        ?> 
                </div>  
            <div class="col-8">
                <div class >
                    <?php    
                        require ('listeexo.php');
                        listeexo();   
                    ?>
                </div>

            </div>  
            <!-- <a> Les tutos</a>    -->
    </div>   
<!-- JavaScript Bundle with Popper -->
</body>
</html>

</body>
</html>