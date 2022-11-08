<?php
$photoname = ($_FILES['photo']['tmp_name']);
if(!empty($_POST)){
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
    echo 'faux6 ';
    }
    elseif(($_POST['user_pass']) != ($_POST['confirm_pass'])){
    echo 'Le Mot de passe n/est pas le meme ';
    }
    else {
        require '../assets/fonction.php';
    $username = valid_donnees($_POST['username']);
    $nom = valid_donnees($_POST['nom']);
    $prenom = valid_donnees($_POST['prenom']);
   
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
    } while (file_exists('../img/copyimage/' . $avatar));

    if(copy($_FILES['photo']['tmp_name'],'../img/copyimage/'.$avatar)){
    require "../assets/bdd.php";
    $req = $pdo->prepare("INSERT INTO inscription SET username = ?, nom = ?, prenom = ?, email= ? , user_pass = ? , photo = ?");
    $password = password_hash($_POST['user_pass'], PASSWORD_BCRYPT);
    $req->execute([$_POST['username'],$_POST['nom'], $_POST['prenom'], $_POST['email'], $password ,$_FILES['photo'] = $avatar]);
    header("location:../index.php?=id=$username");
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