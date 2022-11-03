
  <link rel="stylesheet" href="../style.css">
<?php
include '../header.php'
?>


<?php
 if(isset($_SESSION['username'])){
  
    echo '<div class="nom1">Bienvenue chez WatchFlix <br></div>' ;
    echo '<div class="nom2">'.$_SESSION['username'].'</div>';
}
?>
<div class="bouton">
<h1></h1>
<button class="bouton1" type="submit" ><a class="titre" href="../deco.php">Deconnexion</a></button>
<button  class="bouton2"  type="submit"><a class="titre" href="../WatchFlix/communauté.php">Espace <br> Commentaire </a></button>
<button  class="bouton3"  type="submit"><a class="titre" href="../WatchFlix/get_membre.php">Gerer les membres <br></a></button>
</div>
</div>






<?php
include'../footer.php'
?>