<?php
error_reporting(E_ERROR | E_PARSE);
require '../includes/database.php';

$Ciutat = $_POST['city'];
$Direccio = $_POST['address'];
$Provincia = $_POST['province'];
$Pais = $_POST['country'];

$query = "INSERT INTO Biblioteca (Ciutat, Direccio, Provincia, Pais) VALUES('$Ciutat', '$Direccio', '$Provincia', '$Pais')";

$result = mysqli_query($dbh, $query);

if($result){
    header('Location: ../Biblioteca.php');
}else{
    echo mysqli_error($dbh);
}