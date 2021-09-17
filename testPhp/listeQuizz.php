<?php
function listeQuizz(){
 if (isset($_GET['quizz'])) { /*si la variable $_GET['site'] existe.*/ 
    foreach (glob("quizz/*.xml") as $filename) {//Parcour le dossier quizz et attribue le fichier à la variable
        if('quizz/'.$_GET['quizz'].'.xml' == $filename){//Récupère le paramètre dans l'URL et  compare son égalité à $filename
            require_once 'quizz/'.$_GET['quizz'].'.php';// Si c'est le cas charger la page php correspondant au paramètre de l'URL
            }
        }
    }    
}   
    
?>