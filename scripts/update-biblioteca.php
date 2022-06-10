<?php
error_reporting(E_ERROR | E_PARSE);
require '../includes/database.php';

$Ciutat = $_POST['city'];
$Direccio = $_POST['address'];
$Provincia = $_POST['province'];
$Pais = $_POST['country'];
$id_biblioteca = $_POST['id'];

$query = "UPDATE Biblioteca SET Ciutat = '$Ciutat', Direccio = '$Direccio', Provincia = '$Provincia', Pais = '$Pais' WHERE IdBiblioteca = '$id_biblioteca' ";

$result = mysqli_query($dbh, $query);

if($result){
    header('Location: ../Biblioteca.php');
}else{
    echo mysqli_error($dbh);
}