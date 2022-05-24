<?php
error_reporting(E_ERROR | E_PARSE);
require '../includes/database.php';


$DNI = $_GET['DNI'];

$query = "DELETE FROM Autor WHERE DNI = '$DNI'";

$result = mysqli_query ($dbh, $query);

if($result){
    header('Location: ../Autor.php');
}else{
    echo mysqli_error ($dbh);
}