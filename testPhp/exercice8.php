<?php
$titre = 'Exercice8';
$enonce = 'Créer une fonction from scratch qui s"appelle
verificationPassword().
Elle prendra un argument de type string.
Elle devra retourner un boolean qui vaut true si le password
fait au moins 8 caractères et false si moins.';




 function affmsg(){
     $msg='function verificationPassword(){<br>
        $pswrd ="bilibilibili";<br>
        if(strlen($pswrd)>=8)<br>
        return (TRUE);<br>
        else{<br>
            return (FALSE);<br>
        }<br>
    }<br>
    
    echo verificationPassword();<br/>';
   return $msg;
 }    


 
function moyenne(){
    function verificationPassword(){
        $pswrd ='bilibilibili';
        if(strlen($pswrd)>=8)
        return (TRUE);
        else{
            return (FALSE);
        }
    }
    
     return verificationPassword();
}

?>

<h1 class='titre animate__animated animate__fadeIn'><?=$titre?></h1>
<p class='enonce animate__animated animate__fadeIn'><?=$enonce?></p>




    <div class="codebox animate__animated animate__fadeIn">
        <div class='code'><?=affmsg()?></div>
        <div class='result'><?=moyenne()?></div>
    </div>    

