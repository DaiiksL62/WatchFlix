<?php
include '../WatchFlix/header.php'
?>

<h1 class="titre">Inscrit-toi pour pouvoir rejoindre notre communauté !</h1>
<div class="formulaire1">


<form action="../WatchFlix/assets/inscr-watchflix.php" method="POST" class="formulaire" enctype="multipart/form-data">

<label for="photo">Votre image de profil</label>
<input type="file" name="photo" >

<label for="username">Nom d'Utilisateur</label>
<input type="text" name="username" id="pseudo" required >

<label for="nom">Nom</label>
<input type="text" name="nom" id="name" required >

<label for="prenom">Prénom</label>
<input type="text" name="prenom" id="prename" required >

<label for="email"> Votre E-mail</label>
<input type="text" name="email" id="email" required >

<label for="user_pass">Mot de passe</label>
<input type="password" name="user_pass" id="uspass" required >

<label for="confirm_pass">Confirmer votre mot de passe</label>
<input type="password" name="confirm_pass" id="confpass" required >

<label for="confirm_pass">En cochant cette case , j'accepcte de donner mes données</label>
<input type="checkbox" name="checkbox" id="checkbox" required >


<button type="submit" class="button"><h3>Inscription</h3></button>

</div>
     
    
            
    <?php
include '../WatchFlix/footer.php'
?>












