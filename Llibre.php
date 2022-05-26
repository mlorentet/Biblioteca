<!DOCTYPE html>
<html>

<?php include 'includes/head.php'; ?>


<body>
    <div class="container">
        <section class="mb='5' mt='5'">
            <?php include 'includes/header.html'; ?>
        </section>
        <section>
            <a class="btn btn-primary" href="new-llibre.php">Insertar</a>
            <table class="table" mb='5' mt='5'>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>TITOL</th>
                        <th>GENERE</th>
                        <th>OPCIONS</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = "SELECT * FROM Llibre";
                    $result = mysqli_query($dbh, $query);
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "
                            <tr>
                                <td>".$row['id']."</td>
                                <td>".$row['Titol']."</td>
                                <td>".$row['Genere']."</td>
                                <td>
                                    <a class='btn btn-primary' href='new-llibre.php?id=".$row['id']."'>
                                        <i class='bi bi-pencil-square'></i>
                                    </a>
                                    <a class='btn btn-danger' href='scripts/delete-llibre.php?id=".$row['id']."'>
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