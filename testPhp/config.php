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

    //Function créer en xml
function create_xml($titre, $questions, $tabReponses){
    $fichier = fopen('quizz/' . $titre.'.xml', 'w+');//Tente d'ouvir le fichier et s'il n'existe pas en crée un de ce nom
    $xml = new XMLWriter();//Object-oriented style. Cette extension permet la génération de flux et de fichiers au format XML.
    $xml->openMemory();//Mémoire tampon Object-oriented style
    $xml->setIndent(2);//indentation
    $xml->startElement('quizz');//Crée le premier noeud (en-tête du tableau)
    $xml->startElement('ennonce');// Crée le deuxième noeud
    $xml->writeElement('question', $questions);// Crée les éléments
        foreach($tabReponses as $reponse){
                $xml->writeElement('reponse', $reponse);// Rempli le tableau $tabReponses avec élément réponse
            }
            
    $xml->endElement();// Ferme le deuxième noeud
    $xml->endElement();// Ferme le premier noeud
    $xml2 = $xml->outputMemory(true);//Imprimer la mémoire
        
    fputs($fichier, $xml2);//returns the number of bytes written
    fclose($fichier);// Ferme l'accès au fichier
}

// Crée un fichier PHP
function create_php($titre){
    $fichier = fopen('quizz/' . $titre.'.php', 'w+');//Tente d'ouvir le fichier et s'il n'existe pas en crée un de ce nom
    $php = "<?php";
    $php .= "?>";
        
    fputs($fichier, $php);//returns the number of bytes written
    fclose($fichier);// Ferme l'accès au fichier
}




//Affiche le fichier demandé
function affxml(){
if (isset($_POST['name'])) {//déclare que $_POST['name'] existe
    foreach (glob("quizz/*.xml") as $filename) {//Boucle qui parcour le dossier/ la fonction glob charge le dossier
        
        if('quizz/'.$_POST['name'].'.xml' == $filename){
            
            $quizz = simplexml_load_file($filename);//charge le fichier
            print_r($quizz);//affiche le quizz

                foreach ($quizz as $ennonce) { //Cherche le noeud ennonce dans le noeud quizz
                    echo '<br><br>'.$ennonce->question.'<br><br>';//cherche les éléments questions dans le noeud ennonce
                    foreach($ennonce->reponse as $a){
                        echo $a.'<br><br>';
                    }
                }      
             
            } 
            
        }     
    }     
} 


function getquizz($quizz){
    $quizz = simplexml_load_file('../testPhp/chapitres/'.$_GET['chapitre'].'.xml');//charge le fichier 
    foreach ($quizz as $ennonce) { ?>
         <?= $ennonce ?> <br/>
    <?php
      }
    }
?>

