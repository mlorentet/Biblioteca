<?php
error_reporting(E_ERROR | E_PARSE);
require '../includes/database.php';

$Titol = $_POST['title'];
$Genere = $_POST['genre'];
$Nom = $_POST['name'];
$id_llibre = $_POST['id'];

$query = "UPDATE Llibre SET Titol = '$Titol', Genere = '$Genere', Nom = '$Nom' WHERE IdLlibre = '$id_llibre' ";

$result = mysqli_query($dbh, $query);

if($result){
    header('Location: ../Llibre.php');
}else{
    echo mysqli_error($dbh);
}