<?php
error_reporting(E_ERROR | E_PARSE);
require '../includes/database.php';

$Llibre = $_POST['title'];
$Genere = $_POST['genre'];
$Nom = $_POST['name'];

$query = "INSERT INTO Llibre (Titol, Genere, Nom) VALUES('$Llibre', '$Genere', '$Nom')";

$result = mysqli_query($dbh, $query);

if($result){
    header('Location: ../Llibre.php');
}else{
    echo mysqli_error($dbh);
}