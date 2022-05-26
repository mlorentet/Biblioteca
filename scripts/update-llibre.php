<?php
error_reporting(E_ERROR | E_PARSE);
require '../includes/database.php';

$Titol = $_POST['title'];
$Genere = $_POST['genre'];
$id = $_POST['id'];

$query = "UPDATE Llibre SET Titol = '$Titol', Genere = '$Genere' WHERE id = '$id' ";

$result = mysqli_query($dbh, $query);

if($result){
    header('Location: ../Llibre.php');
}else{
    echo mysqli_error($dbh);
}