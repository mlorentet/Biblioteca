<?php
error_reporting(E_ERROR | E_PARSE);
require '../includes/database.php';


$IdPrestec = $_GET['IdPrestec'];

$query = "DELETE FROM Prestec WHERE IdPrestec = '$IdPrestec'";

$result = mysqli_query ($dbh, $query);

if($result){
    header('Location: ../Prestec.php');
}else{
    echo mysqli_error ($dbh);
}