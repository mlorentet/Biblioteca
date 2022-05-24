<?php
error_reporting(E_ERROR | E_PARSE);
require '../includes/database.php';


$IdBiblioteca = $_GET['id'];

$query = "DELETE FROM Biblioteca WHERE id = '$IdBiblioteca'";

$result = mysqli_query ($dbh, $query);

if($result){
    header('Location: ../Biblioteca.php');
}else{
    echo mysqli_error ($dbh);
}