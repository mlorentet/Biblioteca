<!DOCTYPE html>
<html>

<?php include 'includes/head.php'; ?>

<body class="d-flex flex-column min-vh-100">
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
                        <th>EDITORIAL</th>
                        <th>OPCIONS</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = "SELECT Editorial.Nom as nom_editorial, Llibre.* FROM Llibre
                    INNER JOIN Editorial ON (Editorial.IdEditorial = Llibre.IdEditorial)";
                    $result = mysqli_query($dbh, $query) or die(mysqli_error($dbh));
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "
                            <tr>
                                <td>".$row['IdLlibre']."</td>
                                <td>".$row['Titol']."</td>
                                <td>".$row['Genere']."</td>
                                <td>".$row['nom_editorial']."</td>
                                <td>
                                    <a class='btn btn-primary' href='new-llibre.php?IdLlibre=".$row['IdLlibre']."'>
                                        <i class='bi bi-pencil-square'></i>
                                    </a>
                                    <a class='btn btn-danger' href='scripts/delete-llibre.php?IdLlibre=".$row['IdLlibre']."'>
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