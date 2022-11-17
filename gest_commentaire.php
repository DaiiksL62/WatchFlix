<?php
include '../WatchFlix/header.php';
?>

<div>
  <h1 class="membre">Liste des commentaire</h1>
</div>
<?php
include "./assets/bdd.php";
$req = $pdo->query("SELECT * FROM commentaire");
while($data=$req->fetch()){

echo  " <div class='liste'> <h1 id='pseudo'>$data->pseudo</h1> <p id='message-gest'>$data->message</p> <h1 id='prenom'>$data->date</h1></div>";
echo "<div id='bouton_delete'> 
<a href ='./delete_commentaire.php?id=$data->id'id='supprimer' class='supprimer'>
              <input type='submit' value='Supprimer' class='button-popup' onclick='return checkdelete()'>
              </a>";
echo "</div>";
  }
  ?>
  </section>


<script>
  function checkdelete(){
         return confirm('Vous etes sur de supprimer ce commentaire ? ');
  }


</script>


<?php
include '../WatchFlix/footer.php';
?>