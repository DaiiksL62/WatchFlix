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
    <title>WatchFlix</title>
</head>
<body>
  <header> 
    
   <nav class="nav">
    <ul class="barre-nav">
        <li class="Films"> <a class="films" href="../WatchFlix/films.php"> Films</a></li>
       <li class="Series"> <a class ="series" href="../WatchFlix/series.php">Series</a></li>
      
       <div class="logo1" >
        <a href="../WatchFlix/index.php"><img src="../WatchFlix/img/Watch img 2.svg" alt="" width="300" id="logo5"></a>
        </div>
        <li class="communauté"> <a id="communauté" href="../WatchFlix/communauté.php">Communauté</a></li>
        <div>

    <?php
      
    ?>
   

        <li class="Films"> <a class="films" href="../WatchFlix/connexion.php">S'identifier</a></li>
        <li class="communauté"> <a id="communauté" href="../WatchFlix/inscription.php">S'inscrire</a></li>
        </div>
    </ul>

   </nav>
   <video id="background-video" autoplay loop muted>
  <source src="../WatchFlix/video/video_header.mp4" type="video/mp4">
</video>

<div class="content">

</div>
  </header>

