<?php
include '../WatchFlix/header.php'
?>
<?php
if(isset($_SESSION['username'])){
$username = $_SESSION['username'];
}
if(isset($_SESSION['user_kind'])){
     if($_SESSION['user_kind'] ==  1){
        exit(header( 'location:../WatchFlix/index_admin.php'));
    }
    
    if($_SESSION['user_kind'] ==  2){
        exit(header( 'location:../WatchFlix/index_user.php'));
    }
}
    ?>
<h1 class="titre">Connecte-Toi  !</h1>

<div class="formulaire1">


<form action="./login_exec.php" method="POST" class="formulaire" >



<label for="username">Nom d'Utilisateur</label>
<input type="text" name="username" id="pseudo" required >

<label for="user_pass">Mot de passe</label>
<input type="password" name="user_pass" id="uspass" required >


<button type="submit" class="button"><h3>Inscrption</h3></button>

</div>



  
    


<?php
include '../WatchFlix/footer.php'
?>