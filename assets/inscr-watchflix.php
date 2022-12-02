<?php
$photoname = ($_FILES['photo']['tmp_name']);
if(!empty($_POST)){
    $errors = array();
    if(empty($_FILES['photo'])){
        echo"Veuillez renseigner une photo";
    }
    if(empty($_POST['username'])){
    echo 'Veuillez renseigner un pseudo';
    }
    elseif(empty($_POST['nom'])){
    echo 'Veuillez renseigner votre nom';
    } 
    elseif(empty($_POST['prenom'])){
    echo 'Veuillez renseigner votre prenom';
    }
    elseif(strlen($_POST['user_pass']) < 6){
    echo 'Votre mot de passe doit contenir 6 mots';
    }
    elseif(empty($_POST['user_pass'])){
    echo 'Veuillez renseigner un mot de passe ';
    }
    elseif(($_POST['user_pass']) != ($_POST['confirm_pass'])){
    echo 'Le Mot de passe nest pas le meme ';
    }
    else {
        require '../assets/fonction.php';
    $username = valid_donnees($_POST['username']);
    $nom = valid_donnees($_POST['nom']);
    $prenom = valid_donnees($_POST['prenom']);
    $email = valid_donnees($_POST['email']);


    
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
    $req->execute([$username,$nom, $prenom, $email, $password , $avatar]);
    header("location:../index.php");
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