<?php
include './header.php'
?>

<?php

$id_user =$_GET['id'];
if(!empty($_POST)){
    require '../WatchFlix/assets/bdd.php';
    $req =$pdo->prepare("UPDATE inscription SET username =?, nom= ?,prenom= ?,email=? WHERE id=?");
    $req->execute(array($_POST['username'],$_POST['nom'],$_POST['prenom'],$_POST['email'],$id_user));
    header('location:./index.php');

}

?>


<fieldset>
    <h1>Modifier le profil</h1>

    <form action="#" method="POST" enctype="multipart/form-data">


    <label for="username">Nouveau Pseudo</label>
    <input type="text"  name="username" required>

    <label for="nom">Nouveau nom</label>
    <input type="text"  name="nom" required>

    <label for="prenom">Nouveau Prenom</label>
    <input type="text"  name="prenom" required>

    <label for="email"> Nouvelle Adresse Email</label>
    <input type="text" name="email" id="email" required >



    <input type="submit" value ="Changement" class="button_changement">

    </form>
</fieldset>






<?php
include './footer.php'
?>