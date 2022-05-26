<?php
error_reporting(E_ERROR | E_PARSE);
require '../includes/database.php';

$Duracio = $_POST['duration'];
$Data_Inici = $_POST['start_date'];
$Data_Finalitzacio = $_POST['final_date'];
$Estat = $_POST['state'];

$query = "INSERT INTO Prestec (Duracio, Data_Inici, Data_Finalitzacio, Estat) VALUES('$Duracio', '$Data_Inici', '$Data_Finalitzacio', '$Estat')";

$result = mysqli_query($dbh, $query);

if($result){
    header('Location: ../Prestec.php');
}else{
    echo mysqli_error($dbh);
}