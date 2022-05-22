<?php
error_reporting(E_ERROR | E_PARSE);
require '../includes/database.php';


$DNI = $_GET['DNI'];

$query = "DELETE FROM Soci WHERE DNI = '$DNI'";

$result = mysqli_query ($dbh, $query);

if($result){
    header('Location: ../Soci.php');
}else{
    echo mysqli_error ($dbh);
}
