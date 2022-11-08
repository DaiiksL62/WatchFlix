<?php
session_start();

$id=$_GET['id'];


require "./assets/bdd.php";

$req=$pdo->prepare("DELETE FROM inscription WHERE id=?");
$req->execute(array($id));
exit(header('location: ./gest_membre.php'));

?>