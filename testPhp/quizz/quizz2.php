<?php

    if (isset($_GET['quizz'])){//déclare que $_POST['name'] existe
        foreach (glob("quizz/*.xml") as $filename) {//Boucle qui parcour le dossier
            if('quizz/'.$_GET['quizz'].'.xml' == $filename){
                
                $quizz = simplexml_load_file($filename);//charge le fichier
    
                    foreach ($quizz as $ennonce) { //Cherche le noeud ennonce dans le noeud quizz
                        echo '<br><br>'.$ennonce->question.'<br><br>';//cherche les éléments questions dans le noeud ennonce
                        foreach($ennonce->reponse as $a){// Associe les valeurs de réponse à la variable $a ligne par ligne
                            echo $a.'<br><br>';
                        }
                    }      
                 
                } 
            }     
        }            
?>