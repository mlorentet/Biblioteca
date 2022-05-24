<?php
error_reporting(E_ERROR | E_PARSE);
require '../includes/database.php';

$DNI = $_POST['dni'];
$Nom = $_POST['name'];
$Llinatges = $_POST['surname'];
$CorreuElectronic = $_POST['email'];
$Telefon = $_POST['phone'];

$query = "INSERT INTO Autor VALUES('$DNI', '$Nom', '$Llinatges', '$CorreuElectronic', $Telefon)";

$result = mysqli_query($dbh, $query);

if ($result){
    header('Location: ../Autor.php');
}else{
    echo mysqli_error($dbh);
}