<!DOCTYPE html>
<html>



<?php include 'includes/head.php'; ?>

<body>

    <?php include 'includes/header.html'; ?>


    <table>
        <thead>
            <tr>
                <td>IDPRESTEC</td>
                <td>DURACIO</td>
                <td>DATA_INICI</td>
                <td>DATA_FINALITZACIO</td>
                <td>ACTIVE</td>
            </tr>
        </thead>
        <tbody>
            <?php
            $query = "SELECT * FROM Prestec";
            $result = mysqli_query($dbh, $query);
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                                <td>" . $row['IdPrestec'] . "</td>
                                <td>" . $row['Duracio'] . "</td>
                                <td>" . $row['Data_Inici'] . "</td>
                                <td>" . $row['Data_Finalitzacio'] . "</td>
                                <td>" . $row['active'] . "</td>
                        </tr>";
            }
            ?>
        </tbody>
    </table>
    <?php include 'includes/footer.php'; ?>
</body>

</html>