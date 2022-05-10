<!DOCTYPE html>
<html>



    <?php include 'includes/head.php'; ?>



    <?php include 'includes/header.php'; ?>

        <body>
            <table>
                <thead>
                    <tr>
                        <td>DNI</td>
                        <td>NOM</td>
                        <td>LLINATGES</td>
                        <td>NACIONALITAT</td>
                        <td>CORREU_ELECTRONIC</td>
                        <td>TELEFON</td>
                        <td>ACTIVE</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $query = "SELECT * FROM Soci";
                        $result = mysqli_query($dbh, $query);
                        while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>
                                <td>".$row['DNI']."</td>
                                <td>".$row['Nom']."</td>
                                <td>".$row['Llinatges']."</td>
                                <td>".$row['Nacionalitat']."</td>
                                <td>".$row['correu_electronic']."</td>
                                <td>".$row['Telefon']."</td>
                                <td>".$row ['active']."</td>
                        </tr>";
                        }
                    ?>
                </tbody>
            </table>
        <?php include 'includes/footer.php'; ?>
</html>