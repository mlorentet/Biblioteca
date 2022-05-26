<!DOCTYPE html>
<html>

<?php include 'includes/head.php'; ?>


<body>
    <div class="container">
        <section class="mb='5' mt='5'">
            <?php include 'includes/header.html'; ?>
        </section>
        <section>
            <a class="btn btn-primary" href="new-prestec.php">Insertar</a>
            <table class="table" mb='5' mt='5'>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>DATA INICI</th>
                        <th>DATA FINALITZACIO</th>
                        <th>DURACIO</th>
                        <th>ESTAT</th>
                        <th>OPCIONS</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = "SELECT * FROM Prestec";
                    $result = mysqli_query($dbh, $query);
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "
                            <tr>
                                <td>".$row['id']."</td>
                                <td>".$row['Duracio']."</td>
                                <td>".$row['Data_Inici']."</td>
                                <td>".$row['Data_Finalitzacio']."</td>
                                <td>".$row['Estat']."</td>
                                <td>
                                    <a class='btn btn-primary' href='new-prestec.php?id=".$row['id']."'>
                                        <i class='bi bi-pencil-square'></i>
                                    </a>
                                    <a class='btn btn-danger' href='scripts/delete-prestec.php?id=".$row['id']."'>
                                        <i class='bi bi-trash'></i>
                                    </a>
                                </td>
                            </tr>";
                    }
                    ?>
                </tbody>
            </table>
        </section>
    </div>
</body>
<?php include 'includes/footer.php'; ?>

</html>