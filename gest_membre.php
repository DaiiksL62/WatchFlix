<?php
include '../WatchFlix/header.php';
?>

<div>
  <h1 class="membre">Liste des Membres</h1>
</div>
<section class="bg-liste-membre">

<div class="table-user">
  <h3 class="titre-table">Pseudo</h3>
  <h3 class="titre-table">Nom</h3>
  <h3 class="titre-table">Prenom</h3>
  <h3 class="titre-table">Email</h3>
</div>
</section>

<?php
include "./assets/bdd.php";
$req = $pdo->query("SELECT * FROM inscription");
while($data=$req->fetch()){

echo  " <div class='liste'> <h1 id='pseudo'>$data->username</h1> <h1 id='nom'>$data->nom</h1> <h1 id='prenom'>$data->prenom</h1> <h1  id='email'>$data->email</h1></div>";
echo "<td>";
echo "<div id='bouton_delete'> <button type='oneclick'class='bg-modifier'><a href ='./update_profil.php?id=$data->id' id='modifier'> Modifier </a> </button>";
echo "<button type='oneclick'class='bg-modifier'> <a href ='./delete_db.php?id=$data->id'id='supprimer'> Supprimer </a> </button></div>";
  }
  ?>
  </table>
  </section>


<?php
include '../WatchFlix/footer.php';
?>