<!DOCTYPE html>
<html>



    <?php include 'includes/head.php'; ?>



    <?php include 'includes/header.php'; ?>

        <body>
            <table>
                <thead>
                    <tr>
                        <td>IDBIBLIOTECA</td>
                        <td>CIUTAT</td>
                        <td>DIRECCIO</td>
                        <td>PAIS</td>
                        <td>PROVINCIA</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $query = "SELECT * FROM Biblioteca";
                        $result = mysqli_query($dbh, $query);
                        while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>
                                <td>".$row['IdBiblioteca']."</td>
                                <td>".$row['Ciutat']."</td>
                                <td>".$row['Direccio']."</td>
                                <td>".$row['Pais']."</td>
                                <td>".$row['Provincia']."</td>
                        </tr>";
                        }
                    ?>
                </tbody>
            </table>
        <?php include 'includes/footer.php'; ?>
        </body>
</html>