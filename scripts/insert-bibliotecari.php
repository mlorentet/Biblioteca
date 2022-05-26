<?php
error_reporting(E_ERROR | E_PARSE);
require '../includes/database.php';

$DNI = $_POST['dni'];
$Nom = $_POST['name'];
$Llinatges = $_POST['surname'];
$Email = $_POST['email'];
$Estat = $_POST['state'];

$query = "INSERT INTO Bibliotecari (DNI, Nom, Llinatges, email, Estat) VALUES('$DNI', '$Nom', '$Llinatges', '$Email', '$Estat')";

$result = mysqli_query($dbh, $query);

if($result){
    header('Location: ../Bibliotecari.php');
}else{
    echo mysqli_error($dbh);
}