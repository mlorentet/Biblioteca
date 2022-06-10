<?php
error_reporting(E_ERROR | E_PARSE);
require '../includes/database.php';

$Duracio = $_POST['duration'];
$Data_Inici = $_POST['start_date'];
$Data_Finalitzacio = $_POST['final_date'];
$Estat = $_POST['state'];
$id_prestec = $_POST['id'];

$query = "UPDATE Prestec SET Duracio = '$Duracio', Data_Inici = '$Data_Inici', Data_Finalitzacio = '$Data_Finalitzacio', Estat = '$Estat' WHERE IdPrestec = '$id_prestec' ";

$result = mysqli_query($dbh, $query);

if($result){
    header('Location: ../Prestec.php');
}else{
    echo mysqli_error($dbh);
}