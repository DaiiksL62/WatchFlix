<?php
include './header.php';
$id= $_SESSION['id'];
?>
<?php
if(!empty($_POST)){
    $photoname = $_FILES['photo']['tmp_name'];
    $errors = array();
    if(empty($_FILES['photo'])){
        echo"Insert une image";
    }
    if(empty($_POST['username'])){
    echo 'Le pseudo est pas disponible';
    }
    elseif(empty($_POST['nom'])){
    echo 'Votre nom est pas disponible';
    } 
    elseif(empty($_POST['prenom'])){
    echo 'Votre prenom est pas disponible';
    }
    elseif(strlen($_POST['user_pass']) < 6){
    echo 'Votre mot de passe doit contenir 6 mots';
    }
    elseif(empty($_POST['user_pass'])){
    echo 'Pas le bon mot de passe ';
    }
    elseif(($_POST['user_pass']) != ($_POST['confirm_pass'])){
    echo 'Le Mot de passe nest pas le meme ';
    }
    else {
        require "../WatchFlix/assets/fonction.php";
    $username = valid_donnees($_POST['username']);
    $nom = valid_donnees($_POST['nom']);
    $prenom = valid_donnees($_POST['prenom']);
    $email = valid_donnees($_POST['email']);
   
    $photoname = 'avatar.png';
    $png_extention = '.jpeg';


    

    
    if ($_FILES['photo']['type'] == 'image/jpeg') {
        $extension = '.jpg';
    }
    elseif ($_FILES['photo']['type'] == 'image/png') {
        $extension = '.png';
    }
    else {
        echo 'Erreur extension : ' .$_FILES['photo']['type'];
    }


    do{
        $avatar =uniqid('avatar_'). $extension;
    } while (file_exists('./img/copyimage/' . $avatar));

    if(copy($_FILES['photo']['tmp_name'],'./img/copyimage/'.$avatar)){
    require "./assets/bdd.php";
    $req = $pdo->prepare("UPDATE inscription SET username = ?, nom = ?, prenom = ?, email= ? , user_pass = ? , photo = ? WHERE id=?");
    $password = password_hash($_POST['user_pass'], PASSWORD_BCRYPT);
    $req->execute([$username,$nom, $prenom, $email, $password , $avatar, $id]);
}
if(isset($_SESSION['username'])){
    $username = $_SESSION['username'];
    }
    if(isset($_SESSION['user_kind'])){
         if($_SESSION['user_kind'] ==  1){
            exit(header( 'location:../WatchFlix/index_admin.php?id=$id'));
        }
        
        if($_SESSION['user_kind'] ==  2){
            exit(header( 'location:../WatchFlix/index_user.php?id=$id'));
        }
    }
    else{
        echo'Erreur';

    }
    exit();

}
}
if (isset($errors)) {
    $_SESSION['erreur'] = $errors;
}
?>




<div class="formulaire1">

    <h1>Modifier le profil</h1>

  
<form action="#" method="POST" class="formulaire" enctype="multipart/form-data" >

<label for="photo">Votre image de profil</label>
<input type="file" name="photo" >

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


<button type="submit" class="button" onclick="return checkUpdate()"><h3> Changement</h3></button>

</form>
</div>




<script>
  function checkUpdate(){
         return confirm('Vous etes sur de modifier votre profil ? ');
  }


</script>


<?php
include './footer.php'
?>