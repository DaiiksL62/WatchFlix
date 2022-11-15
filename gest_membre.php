<?php
include '../WatchFlix/header.php';
?>

<div>
  <h1 class="membre">Liste des Membres</h1>
</div>
<section class="bg-liste-membre">


</section>

<?php
include "./assets/bdd.php";
$req = $pdo->query("SELECT * FROM inscription");
while($data=$req->fetch()){

echo  " <div class='liste'> <h1 id='pseudo'>$data->username</h1> <h1 id='nom'>$data->nom</h1> <h1 id='prenom'>$data->prenom</h1> <h1  id='email'>$data->email</h1></div>";
echo "<div id='bouton_delete'> <a href ='./update_profil.php?id=$data->id' id='modifier'> Modifier </a> ";
echo "<a href ='./delete_db.php?id=$data->id'id='supprimer' class='supprimer'> Supprimer </a></div>";
  }
  ?>
  </section>
<

<?php
include '../WatchFlix/footer.php';
?>