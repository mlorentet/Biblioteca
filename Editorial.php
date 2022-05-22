<!DOCTYPE html>
<html>

<?php include 'includes/head.php'; ?>


<body>

    <div class="container">

        <section class="mb-5 mt-5">
            <?php
            include 'includes/header.html';
            ?>
            <h1 class="mb-5 mt-5">SOCIS</h1>

        </section>
        <section>

            <a class="btn btn-primary" href="new-soci.php">INSERTAR NOU SOCI</a>


            <table class="table mt-5">
                <thead>
                    <tr>
                        <td>IdEditorial</td>
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
                        <td  scope='row'>" . $row['IdEditorial'] . "</td>
                        <td>" . $row['CP'] . "</td>
                        <td>" . $row['Provincia'] . "</td>
                        <td>" . $row['Direccio'] . "</td>
                        <td>" . $row['Pais'] . "</td>
                        <td>" . $row['Ciutat'] . "</td>
                        <td><a class='btn btn-primary' href='new-editorial.php?id=" . $row['IdEditorial'] . "'>Editar</a></td>
                    </tr>";
                    }
                    ?>
                </tbody>
            </table>
            <?php include 'includes/footer.php'; ?>
</body>

</html>

<!DOCTYPE html>
<html>

<?php include 'includes/head.php'; ?>

<body>

    <div class="container">

        <section class="mb-5 mt-5">
            <?php
            include 'includes/header.html';
            ?>
            <h1 class="mb-5 mt-5">CLIENTS</h1>

        </section>
        <section>

            <a class="btn btn-primary" href="new-client.php">INSERTAR NOU CLIENT</a>


            <table class="table mt-5">
                <thead>
                    <tr>
                        <td>ID</td>
                        <td>NOM</td>
                        <td>ADREÇA</td>
                        <td>EMAIL</td>
                        <td>CP</td>
                        <td>Opcions</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = "SELECT * FROM clients";
                    $result = mysqli_query($dbh, $query);
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>
                        <td  scope='row'>" . $row['id'] . "</td>
                        <td>" . $row['nom'] . "</td>
                        <td>" . $row['adreca'] . "</td>
                        <td>" . $row['email'] . "</td>
                        <td>" . $row['cp'] . "</td>
                        <td><a class='btn btn-primary' href='new-client.php?id=" . $row['id'] . "'>Editar</a></td>
                    </tr>";
                    }
                    ?>
                </tbody>
            </table>
        </section>
    </div>
    <footer>Peu de pàgina</footer>
</body>

</html>