<!DOCTYPE html>
<html>



<?php include 'includes/head.php'; ?>



<?php include 'includes/header.php'; ?>

<table>
    <thead>
        <tr>
            <td>DNI</td>
            <td>NOM</td>
            <td>LLINATGES</td>
            <td>TELEFON</td>
            <td>CORREU_ELECTRONIC</td>
        </tr>
    </thead>
    <tbody>
        <?php
        $query = "SELECT * FROM Autor";
        $result = mysqli_query($dbh, $query);
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
<td>" . $row['DNI'] . "</td>
<td>" . $row['Nom'] . "</td>
<td>" . $row['Llinatges'] . "</td>
<td>" . $row['Telefon'] . "</td>
<td>" . $row['correu_electronic'] . "</td>
</tr>";
        }
        ?>
    </tbody>
</table>
<?php include 'includes/footer.php'; ?>
</html>