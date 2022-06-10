<?php
error_reporting(E_ERROR | E_PARSE);
require '../includes/database.php';

$Titol = $_POST['title'];
$Genere = $_POST['genre'];
$NomEditorial = $_POST['editorial_name'];

$query = "INSERT INTO Llibre (Titol, Genere, IdEditorial) VALUES('$Titol', '$Genere', $NomEditorial)";

$result = mysqli_query($dbh, $query);

if($result){
    header('Location: ../Llibre.php');
}else{
    echo mysqli_error($dbh);
}