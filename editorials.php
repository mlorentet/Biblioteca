<!DOCTYPE html>
<html>



    <?php include 'includes/head.php'; ?>



    <?php include 'includes/header.php'; ?>

        <body>
            <table>
                <thead>
                    <tr>
                        <td>IDEDITORIAL</td>
                        <td>CP</td>
                        <td>PROVINCIA</td>
                        <td>DIRECCIO</td>
                        <td>PAIS</td>
                        <td>CIUTAT</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $query = "SELECT * FROM editorial";
                        $result = mysqli_query($dbh, $query);
                        while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>
                                <td>".$row['IdEditorial']."</td>
                                <td>".$row['CP']."</td>
                                <td>".$row['Provincia']."</td>
                                <td>".$row['Direccio']."</td>
                                <td>".$row['Pais']."</td>
                                <td>".$row['Ciutat']."</td>
                        </tr>";
                        }
                    ?>
                </tbody>
            </table>
        <?php include 'includes/footer.php'; ?>
        </body>
</html>