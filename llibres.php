<!DOCTYPE html>
<html>



    <?php include 'includes/head.php'; ?>



    <?php include 'includes/header.php'; ?>

        <body>
            <table>
                <thead>
                    <tr>
                        <td>IDLLIBRE</td>
                        <td>TITOL</td>
                        <td>GENERE</td>
                        <td>IDLLIBRE</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $query = "SELECT * FROM Llibre";
                        $result = mysqli_query($dbh, $query);
                        while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>
                                <td>".$row['IdLlibre']."</td>
                                <td>".$row['Titol']."</td>
                                <td>".$row['Genere']."</td>
                        </tr>";
                        }
                    ?>
                </tbody>
            </table>
        <?php include 'includes/footer.php'; ?>
        </body>
</html>