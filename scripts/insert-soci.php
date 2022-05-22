<?php
error_reporting(E_ERROR | E_PARSE);
require '../includes/database.php';

$DNI = $_POST['dni'];
$Nom = $_POST['name'];
$Llinatges = $_POST['surname'];
$Nacionalitat = $_POST['nationality'];
$CorreuElectronic = $_POST['email'];
$Telefon = $_POST['phone'];
$EstatSoci = $_POST['state'];

$query = "INSERT INTO Soci VALUES('$DNI', '$Nom', '$Llinatges', '$Nacionalitat', '$CorreuElectronic', $Telefon, '$EstatSoci')";

$result = mysqli_query($dbh, $query);

if ($result){
    header('Location: ../Soci.php');
}else{
    echo mysqli_error($dbh);
}
