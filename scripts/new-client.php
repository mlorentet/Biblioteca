<?php 

include "../includes/database.php";

$DNI = $_POST["DNI"];
$Nom = $_POST["Nom"];
$Llinatges = $_POST["Llinatges"];
$Nacionalitat = $_POST["Nacionalitat"];
$correu_electronic = $_POST["correu_electronic"];
$Telefon = $_POST["Telefon"];
$active = $_POST["active"];

$query = "INSERT INTO Soci (DNI,Nom,Llinatges,Nacionalitat,correu_electronic,Telefon,active) VALUES ('$DNI', '$Nom', '$Llinatges', '$Nacionalitat', '$correu_electronic', '$Telefon', '$active')";

$result = mysqli_query ($dbh, $query);

if($result) {
    header('Location: ../socis.php');
}else{
    echo mysqli_error ($dbh);
}
