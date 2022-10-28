<?php

if(!empty($_POST)){
    $errors = array();

    if(empty($_POST['username'])){
    echo 'Le pseudo est pas disponible';
    }
    elseif(empty($_POST['nom'])){
    echo 'Votre nom est pas disponible';
    } 
    elseif(empty($_POST['prenom'])){
    echo 'Votre prenom est pas disponible';
    }
    elseif(empty($_POST['user_kind'])){
        echo 'faux4';
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


    require "../assets/bdd.php";
    $req = $pdo->prepare("INSERT INTO inscription SET username = ?, nom = ?, prenom = ?, email= ? , user_pass = ?, user_kind = ? ");
    $password = password_hash($_POST['user_pass'], PASSWORD_BCRYPT);
    $req->execute([$_POST['username'],$_POST['nom'], $_POST['prenom'], $_POST['email'], $password, $_POST['user_kind']]);
    header('location: ../index.php');

    exit();

}
}
?>