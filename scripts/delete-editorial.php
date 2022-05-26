<?php
error_reporting(E_ERROR | E_PARSE);
require '../includes/database.php';


$IdEditorial = $_GET['id'];

$query = "DELETE FROM Editorial WHERE id = '$IdEditorial'";

$result = mysqli_query ($dbh, $query);

if($result){
    header('Location: ../Editorial.php');
}else{
    echo mysqli_error ($dbh);
}