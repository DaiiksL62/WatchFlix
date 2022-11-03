<?php
include '../WatchFlix/header.php'
?>
   <div class="login-form">

   <legend> Connecte-toi ! !</legend>

    <form action="./login_exec.php" method="POST" class="login">
        
        <label for="username">Nom d'Utilisateur</label>
        <input type="text" name="username" id="username" class="input1">

        <label for="user_pass">Mot de passe</label>
        <input type="password" name="user_pass" class="input1">

        <button type="submit "name ="submit" class="connexion"> Connexion</button>
    </form>
    </fieldset>

    </div>



<?php
include '../WatchFlix/footer.php'
?>