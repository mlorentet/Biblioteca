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
                        <td>CORREU_ELECTRONIC</td>
                        <td>ACTIVE</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $query = "SELECT * FROM Bibliotecaria";
                        $result = mysqli_query($dbh, $query);
                        while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>
                                <td>".$row['DNI']."</td>
                                <td>".$row['Nom']."</td>
                                <td>".$row['Llinatges']."</td>
                                <td>".$row['correu_electronic']."</td>
                                <td>".$row['active']."</td>
                        </tr>";
                        }
                    ?>
                </tbody>
            </table>
        <?php include 'includes/footer.php'; ?>
        </body>
</html>