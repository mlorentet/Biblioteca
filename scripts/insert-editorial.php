<?php
error_reporting(E_ERROR | E_PARSE);
require '../includes/database.php';

$Ciutat = $_POST['city'];
$Direccio = $_POST['address'];
$CP = $_POST['CP'];
$Provincia = $_POST['province'];
$Pais = $_POST['country'];

$query = "INSERT INTO Editorial (Ciutat, Direccio, CP, Provincia, Pais) VALUES('$Ciutat', '$Direccio', '$CP', '$Provincia', '$Pais')";

$result = mysqli_query($dbh, $query);

if($result){
    header('Location: ../Editorial.php');
}else{
    echo mysqli_error($dbh);
}