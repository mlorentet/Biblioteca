<?php 

include "../includes/database.php";

$nom = $POST ["Nom"];

$query = "insert into Soci (DNI, Nom, Llinatges, Nacionalitat, Correu_electronic, Telefon, Active) values ('$DNI', '$Nom', '$Llinatges', '$Nacionalitat', '$correu_electronic', '$telefon', '$active')";

$result = mysqli_query ($dbh, $query);

if ($result) {
    header ('Location: ../socis.php');
}else{
    echo mysqli_error($dbh);
}
?>