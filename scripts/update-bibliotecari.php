<?php
error_reporting(E_ERROR | E_PARSE);
require '../includes/database.php';

$DNI = $_POST['dni'];
$Nom = $_POST['name'];
$Llinatges = $_POST['surname'];
$CorreuElectronic = $_POST['email'];
$Estat = $_POST['state'];

$query = "UPDATE Bibliotecari SET DNI = '$DNI', Nom = '$Nom', Llinatges = '$Llinatges', email = '$CorreuElectronic', Estat = '$Estat' WHERE DNI = '$DNI' ";

$result = mysqli_query($dbh, $query);

if($result){
    header('Location: ../Bibliotecari.php');
}else{
    echo mysqli_error($dbh);
}