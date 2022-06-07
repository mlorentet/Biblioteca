<!DOCTYPE html>
<html>

<?php include 'includes/head.php'; ?>


<body class="d-flex flex-column min-vh-100">
    <div class="container">
        <section class="mb='5' mt='5'">
            <?php include 'includes/header.html'; ?>
        </section>
        <section>
            <a class="btn btn-primary" href="new-editorial.php">Insertar</a>
            <table class="table" mb='5' mt='5'>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>CIUTAT</th>
                        <th>DIRECCIO</th>
                        <th>CP</th>
                        <th>PROVINCIA</th>
                        <th>PAIS</th>
                        <th>OPCIONS</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = "SELECT * FROM Editorial";
                    $result = mysqli_query($dbh, $query);
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "
                            <tr>
                                <td>".$row['IdEditorial']."</td>
                                <td>".$row['Ciutat']."</td>
                                <td>".$row['Direccio']."</td>
                                <td>".$row['CP']."</td>
                                <td>".$row['Provincia']."</td>
                                <td>".$row['Pais']."</td>
                                <td>
                                    <a class='btn btn-primary' href='new-editorial.php?id=".$row['IdEditorial']."'>
                                        <i class='bi bi-pencil-square'></i>
                                    </a>
                                    <a class='btn btn-danger' href='scripts/delete-editorial.php?id=".$row['IdEditorial']."'>
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