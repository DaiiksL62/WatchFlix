<?php
include './header.php'
?>

<?php
 if(!isset($_SESSION['username'])){
   echo'<div class="popup">
   <div class="contentBox">
       <div class="close">
       </div>
   <h3 class="title-popup">Inscrit toi ou connecte toi pour rejoidre notre communauté !</h3>
       <div class="imgBx">
          <img src="./img/Watch_icon.png" alt=""> 
       </div>
       <div class="buttonPopup">
        <a href="./inscription.php" class="link-popup">Inscription</a></li>
         <a href="./connexion.php" class="link-popup">Connexion</a></li>
       </div>
   </div>
</div>
';
 }
?>




<section>
 <div class="titre">
    <h1 class= "title">Les Nouveautés</h1>
 </div>
 <div class="slider">
        <div class="slide-track">
              
             <div class="slide">
                <img src="../WatchFlix/img/film/affiche1_film.jpg" alt="">
             </div>
             <div class="slide">
                <img src="../WatchFlix/img/film/affiche2_film.jpg" alt="">
             </div>

             <div class="slide">
                <img src="../WatchFlix/img/film/affiche_film3.jpg" alt="">
             </div>

             <div class="slide">
                <img src="../WatchFlix/img/film/jumeau_film.jpg" alt="">
             </div>

             <div class="slide">
                <img src="../WatchFlix/img/film/novembre_film.jpg" alt="">
             </div>

             <div class="slide">
                <img src="../WatchFlix/img/film/monstre_flim.jpg" alt="">
             </div>

             <div class="slide">
                <img src="../WatchFlix/img/film/jack.jpg" alt="">
             </div>

             <div class="slide">
                <img src="../WatchFlix/img/film/simons1.jpg" alt="">
             </div>
             <div class="slide">
                <img src="../WatchFlix/img/film/ticket.jpg" alt="">
             </div>

                <!--double silide-->

                <div class="slide">
                    <img  class="affiche-img"src="../WatchFlix/img/film/affiche1_film.jpg" alt="">
                 </div>
                 <div class="slide">
                   <img class="affiche-img"src="../WatchFlix/img/film/affiche2_film.jpg" alt="">
                 </div>
    
                 <div class="slide">
                    <img class="affiche-img"src="../WatchFlix/img/film/affiche_film3.jpg" alt="">
                 </div>
    
                 <div class="slide">
                    <img class="affiche-img" src="../WatchFlix/img/film/jumeau_film.jpg" alt="">
                 </div>
    
                 <div class="slide">
                    <img class="affiche-img" src="../WatchFlix/img/film/novembre_film.jpg" alt="">
                 </div>
    
                 <div class="slide">
                    <img class="affiche-img" src="../WatchFlix/img/film/monstre_flim.jpg" alt="">
                 </div>
    
                 <div class="slide">
                    <img class="affiche-img" src="../WatchFlix/img/film/jack.jpg" alt="">
                 </div>
    
                 <div class="slide">
                    <img class="affiche-img" src="../WatchFlix/img/film/simons1.jpg" alt="">
                 </div>
                 <div class="slide">
                    <img  src="../WatchFlix/img/film/ticket.jpg" alt="">
                 </div>
        </div>

   </div>
   <div class="titre">
    <h1 class= "title1">Les Classiques</h1>
 </div>
 <div class="slider-2">
        <div class="slide-track-2">
              
             <div class="slide-2">
                <img src="../WatchFlix/img/film/classique/7eme companie.jpg" alt="">
             </div>
             <div class="slide-2">
                <img src="../WatchFlix/img/film/classique/harry.jpg" alt="">
             </div>

             <div class="slide-2">
             <img src="../WatchFlix/img/film/classique/chtit.jpg" alt="">
             </div>

             <div class="slide-2">
             <img src="../WatchFlix/img/film/classique/hobbit.jpg" alt="">
             </div>

             <div class="slide-2">
             <img src="../WatchFlix/img/film/classique/lala.jpg" alt="">
             </div>

             <div class="slide-2">
             <img src="../WatchFlix/img/film/classique/spiderman.jpg" alt="">
             </div>

             <div class="slide-2">
             <img src="../WatchFlix/img/film/classique/visiteur.jpg" alt="">
             </div>

             <div class="slide-2">
             <img src="../WatchFlix/img/film/classique/pirates.jpg" alt="">
             </div>
             <div class="slide-2">
             <img src="../WatchFlix/img/film/classique/avatar.jpg" alt="">
             </div>

                <!--double silide-->

                <div class="slide-2">
                <img src="../WatchFlix/img/film/classique/7eme companie.jpg" alt="">
             </div>
             <div class="slide-2">
                <img src="../WatchFlix/img/film/classique/harry.jpg" alt="">
             </div>

             <div class="slide-2">
             <img src="../WatchFlix/img/film/classique/chtit.jpg" alt="">
             </div>

             <div class="slide-2">
             <img src="../WatchFlix/img/film/classique/hobbit.jpg" alt="">
             </div>

             <div class="slide-2">
             <img src="../WatchFlix/img/film/classique/lala.jpg" alt="">
             </div>

             <div class="slide-2">
             <img src="../WatchFlix/img/film/classique/spiderman.jpg" alt="">
             </div>

             <div class="slide-2">
             <img src="../WatchFlix/img/film/classique/visiteur.jpg" alt="">
             </div>

             <div class="slide-2">
             <img src="../WatchFlix/img/film/classique/pirates.jpg" alt="">
             </div>
             <div class="slide-2">
             <img src="../WatchFlix/img/film/classique/avatar.jpg" alt="">
             </div>

        </div>

   </div>
   <div class="titre">
    <h1 class= "title">Les Series du Moment</h1>
 </div>
 <div class="slider" style="margin-bottom: 5%;">
        <div class="slide-track">
              
             <div class="slide">
                <img src="../WatchFlix/img/serie/chinese.jpg" alt="">
             </div>
             <div class="slide">
                <img src="../WatchFlix/img/serie/dahmer.jpg" alt="">
             </div>
             <div class="slide">
                <img src="../WatchFlix/img/serie/luke_cage.jpg" alt="">
             </div>
             <div class="slide">
                <img src="../WatchFlix/img/serie/midnight_club.jpg" alt="">
             </div>
             <div class="slide">
                <img src="../WatchFlix/img/serie/narcos.jpg" alt="">
             </div>
             <div class="slide">
                <img src="../WatchFlix/img/serie/peaky_blinders.jpg" alt="">
             </div>
             <div class="slide">
                <img src="../WatchFlix/img/serie/sherlock.jpg" alt="">
             </div>
             <div class="slide">
                <img src="../WatchFlix/img/serie/tchernobyl.jpg" alt="">
             </div>
             <div class="slide">
                <img src="../WatchFlix/img/serie/the_rain.jpg" alt="">
             </div>

                <!--double silide-->

                <div class="slide">
                <img src="../WatchFlix/img/serie/chinese.jpg" alt="">
             </div>
             <div class="slide">
                <img src="../WatchFlix/img/serie/dahmer.jpg" alt="">
             </div>
             <div class="slide">
                <img src="../WatchFlix/img/serie/luke_cage.jpg" alt="">
             </div>
             <div class="slide">
                <img src="../WatchFlix/img/serie/midnight_club.jpg" alt="">
             </div>
             <div class="slide">
                <img src="../WatchFlix/img/serie/narcos.jpg" alt="">
             </div>
             <div class="slide">
                <img src="../WatchFlix/img/serie/peaky_blinders.jpg" alt="">
             </div>
             <div class="slide">
                <img src="../WatchFlix/img/serie/sherlock.jpg" alt="">
             </div>
             <div class="slide">
                <img src="../WatchFlix/img/serie/tchernobyl.jpg" alt="">
             </div>
             <div class="slide">
                <img src="../WatchFlix/img/serie/the_rain.jpg" alt="">
             </div>
        </div>

   </div>
   <script>
    const popup = document.querySelector('.popup');
    const close = document.querySelector('.close');


    window.onload = function(){
        setTimeout(function(){
            popup.style.display = "block"
        },2000)
    }
 close.addEventListener('click' , () =>{
    popup.style.display =" none"
             })

</script>

   

<?php
include '../WatchFlix/footer.php'
?>