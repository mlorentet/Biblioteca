<!DOCTYPE html>
<html>

<?php include 'includes/head.php'; ?>


<body class="d-flex flex-column min-vh-100">
    <div class="container">
        <section class="mb='5' mt='5'">
            <?php include 'includes/header.html'; ?>
        </section>
        <section>
            <a class="btn btn-primary" href="new-bibliotecari.php">Insertar</a>
            <table class="table" mb='5' mt='5'>
                <thead>
                    <tr>
                        <th>DNI</th>
                        <th>NOM</th>
                        <th>LLINATGES</th>
                        <th>EMAIL</th>
                        <th>ESTAT</th>
                        <th>OPCIONS</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = "SELECT * FROM Bibliotecari";
                    $result = mysqli_query($dbh, $query);
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "
                            <tr>
                                <td>" . $row['DNI'] . "</td>
                                <td>" . $row['Nom'] . "</td>
                                <td>" . $row['Llinatges'] . "</td>
                                <td>" . $row['email'] . "</td>
                                <td>" . $row['Estat'] . "</td>
                                <td>
                                    <a class='btn btn-primary' href='new-bibliotecari.php?DNI=" . $row['DNI'] . "'>
                                        <i class='bi bi-pencil-square'></i>
                                    </a>
                                    <a class='btn btn-danger' href='scripts/delete-bibliotecari.php?DNI=" . $row['DNI'] . "'>
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