<?php
include '../WatchFlix/header.php';
?>

<div>
  <h1 class="membre">Liste des Membres</h1>
</div>
<div class="table-user">
  <h3>Pseudo</h3>
  <h3>Nom</h3>
  <h3>Prenom</h3>
  <h3>Email</h3>
</div>

<?php
include "./assets/bdd.php";
$req = $pdo->query("SELECT * FROM inscription");
while($data=$req->fetch()){

echo  " <div class='liste'>  <tr> <td id='pseudo'>$data->username</td> <td id='nom'>$data->nom</td> <td  id='prenom'>$data->prenom</td> <td  id='email'>$data->email</td></tr></div>";
echo "<td>";
echo "<div id='bouton_delete'><a href ='./update_profil.php?id=$data->id' id='modifier'> Modifier </a>";
echo " <a href ='./delete_db.php?id=$data->id'id='supprimer'> Supprimer </a> </div>";
  }
  ?>
  </table>



<?php
include '../WatchFlix/footer.php';
?>