<?php
error_reporting(E_ERROR | E_PARSE);
require '../includes/database.php';


$IdLlibre = $_GET['IdLlibre'];

$query = "DELETE FROM Llibre WHERE IdLlibre = '$IdLlibre'";

$result = mysqli_query ($dbh, $query);

if($result){
    header('Location: ../Llibre.php');
}else{
    echo mysqli_error ($dbh);
}