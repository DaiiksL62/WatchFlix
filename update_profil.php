<?php
include './header.php'
?>

<?php

$id_user =$_GET['id'];
if(!empty($_POST)){
    require './assets/fonction.php';
    $username = valid_donnees($_POST['username']);
    $nom = valid_donnees($_POST['nom']);
    $prenom = valid_donnees($_POST['prenom']);
    
    require '../WatchFlix/assets/bdd.php';
    $req =$pdo->prepare("UPDATE inscription SET username =?, nom= ?,prenom= ?,email=?,user_pass=? WHERE id=?");
    $password = password_hash($_POST['user_pass'], PASSWORD_BCRYPT);
    $req->execute(array($_POST['username'],$_POST['nom'],$_POST['prenom'],$_POST['email'],$password,$id_user));
    header("location:./index.php");
}

?>

<div class="formulaire1">

    <h1>Modifier le profil</h1>

  
<form action="#" method="POST" class="formulaire">


<label for="username">Nouveau Pseudo</label>
<input type="text" name="username" id="pseudo" required >

<label for="nom"> Nouveau Nom</label>
<input type="text" name="nom" id="name" required >

<label for="prenom"> Nouveau Prénom</label>
<input type="text" name="prenom" id="prename" required >

<label for="email"> Nouvelle Adresse E-mail</label>
<input type="text" name="email" id="email" required >

<label for="user_pass"> Nouveau Mot de passe</label>
<input type="password" name="user_pass" id="uspass" required >

<label for="confirm_pass">Confirmer votre nouveau mot de passe</label>
<input type="password" name="confirm_pass" id="confpass" required >


<button type="submit" class="button"><h3> Changement</h3></button>

</form>
</div>






<?php
include './footer.php'
?>