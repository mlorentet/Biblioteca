<?php
error_reporting(E_ERROR | E_PARSE);
require '../includes/database.php';


$IdEditorial = $_GET['IdEditorial'];

$query = "DELETE FROM Editorial WHERE IdEditorial = '$IdEditorial'";

$result = mysqli_query ($dbh, $query);

if($result){
    header('Location: ../Editorial.php');
}else{
    echo mysqli_error ($dbh);
}