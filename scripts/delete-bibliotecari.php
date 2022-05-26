<?php
error_reporting(E_ERROR | E_PARSE);
require '../includes/database.php';


$DNI_Bibliotecari = $_GET['DNI'];

$query = "DELETE FROM Bibliotecari WHERE DNI = '$DNI_Bibliotecari'";

$result = mysqli_query ($dbh, $query);

if($result){
    header('Location: ../Bibliotecari.php');
}else{
    echo mysqli_error ($dbh);
}