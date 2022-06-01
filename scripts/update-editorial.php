<?php
error_reporting(E_ERROR | E_PARSE);
require '../includes/database.php';

$Nom = $_POST['name'];
$Ciutat = $_POST['city'];
$Direccio = $_POST['address'];
$CP = $_POST['CP'];
$Provincia = $_POST['province'];
$Pais = $_POST['country'];
$id = $_POST['id'];

$query = "UPDATE Editorial SET Nom = '$Nom', Ciutat = '$Ciutat', Direccio = '$Direccio', CP = '$CP', Provincia = '$Provincia', Pais = '$Pais' WHERE id = '$id' ";

$result = mysqli_query($dbh, $query);

if($result){
    header('Location: ../Editorial.php');
}else{
    echo mysqli_error($dbh);
}