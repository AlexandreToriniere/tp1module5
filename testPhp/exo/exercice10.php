<?php
    require("configexo.php");
?>
<?php
    $titre = 'Exercice10';
    $enonce = 'Créer une fonction qui s"appelle remplacerLesLettres(). Elle prendra un
    argument de type string. Elle devra retourner cette même string mais en
    remplacant les e par des 3, les i par des 1 et les o par des 0 Exemple :';





     $msg='function remplacerLesLettres($replace){<br>
        $replace = strtr($replace, "e,i,o", "3,1,0");<br>
        return $replace;<br>
    }
    
    echo "<br><br>".remplacerLesLettres("Bonjour les amis").<br><br>';
  
    $replace ='Bonjour les amis';

?>


    <h1 class='titre animate__animated animate__fadeIn'><?=$titre?></h1>
    <p class='enonce animate__animated animate__fadeIn'><?=$enonce?></p>




    <div class="codebox animate__animated animate__fadeIn">
        <div class='code'><?=affmsg($msg)?></div>
        <div class='result'><?=remplacerLesLettres($replace)?></div>
    </div>    
