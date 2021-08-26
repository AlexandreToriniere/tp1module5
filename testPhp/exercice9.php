<?php
$titre = 'Exercice 9';
$enonce = 'Créer une fonction qui s"appelle verificationPassword().<br>
 Elle prendra un argument de type string. Elle devra retourner un
boolean qui vaut true si le password respecte les règles
suivantes :<br>';




 function affmsg(){
     $msg='function verificationPassword2(){<br>
        $pswrd1 ="8aE64646464";<br>
        
        if(preg_match("#^[a-zA-Z0-9]+$#", $pswrd1) && strlen($pswrd1)>=8)<br>
        {<br>
            return (TRUE);}<br>
    
    
        else{<br>
            return (FALSE);<br>
        } <br>
    }';
   return $msg;
 }    


 
function moyenne(){
    function verificationPassword2(){
        $pswrd1 ='8aE64646464';
        
        if(preg_match('#^[a-zA-Z0-9]+$#', $pswrd1) && strlen($pswrd1)>=8)
        {
            return (TRUE);}
    
    
        else{
            return (FALSE);
        }  
    }
    return verificationPassword2();
}

?>

<h1 class='titre animate__animated animate__fadeIn'><?=$titre?></h1>
<p class='enonce animate__animated animate__fadeIn'><?=$enonce?></p>




    <div class="codebox animate__animated animate__fadeIn">
        <div class='code'><?=affmsg()?></div>
        <div class='result'><?=moyenne()?></div>
    </div>    
