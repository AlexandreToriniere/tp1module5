<style>
.link{
    text-decoration: none;

}

.container {
    height: 100%;
    width: 100%;  
    display:flex;
    justify-content: center;
    align-items: center;
}

.form{
    font-size: 25px;
}

</style>    
<a href="déconnexion.php" class="link">Déconnexion</a>
<div class="container">
    <form action="connexion.php" method="post" class="form">
        <p>Nom: <input type="text" name="log">  </p>
        <p>MDP: <input type="password" name="pwd">  </p>
            <input type='submit'value="valider">
    </form>
</div>        
