<?php

session_start()

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../WatchFlix/police/">
    <link rel="icon" href="../WatchFlix/img/Watch img icon.svg">
    <link rel="stylesheet" href="style.css">
    <script src="app.js"></script>
    <title>WatchFlix</title>
</head>
<body>
<nav class="navbar " role="navigation">
    <div class="navbar__logo"><img src="../WatchFlix/img/Watch icon.png" alt="" srcset="" style="width:70% ;" class="logo-header"></div>    
    <ul class="navbar__links">
      <li class="navbar__link first"><a href="../WatchFlix/index.php">Accueil</a></li>
      <li class="navbar__link second"><a href="./films.php">Films</a></li>
      <li class="navbar__link third"><a href="./series.php">Series</a></li>
      <li class="navbar__link four"><a href="./communauté.php">Communauté</a></li>
      <li class="navbar__link fifth"><a href="./inscription.php">S'inscrire</a></li>
      <li class="navbar__link fifth"><a href="./connexion.php">Connexion</a></li>
    </ul>   
    <button class="burger">
      <span class="bar"></span>  
    </button>   
    <video id="background-video" autoplay loop muted>
  <source src="../WatchFlix/video/video_header.mp4" type="video/mp4">
  </nav>
 
