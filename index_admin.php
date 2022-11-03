<?php
include '../WatchFlix/header.php'


?>
<?php
$id= $_SESSION['id'];
?>




 <h1 class= "title1">Bienvenue sur WatchFlix</h1>
<?php
 if(isset($_SESSION['username'])){
    echo '<div class="username-login">'.$_SESSION['username'].'</div>';
}
?>

<div>
<h1 class="title-membre"> Que souhaitez vous faire ?</h1>

<div class="link_admin">
<a class="titre" href="./deco.php">Deconnexion</a>
<a class="titre" href="./communauté.php">Espace Communauté </a>
<?php echo "<a class='titre' href='./update_profil.php?id=$id'> Modifier mon profil </a>" ?>



<?php
if($_SESSION['user_kind'] ==  1){
    echo'<a  class ="titre " href="./gest_membre.php">Gerer les membres </a>';
}
?>
<?php
if($_SESSION['user_kind'] ==  1){
    echo'<a class="titre "href="./gest_commentaire">Gerer les commentaires</a>';
}
?>
</div>
<br>
<br>



<?php
include '../WatchFlix/footer.php'
?>