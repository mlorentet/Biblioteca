<!DOCTYPE html>
<html>



<?php include 'includes/head.php'; ?>


<body>
    <div class="container">
        <section class="mb='5' mt='5'">
            <?php include 'includes/header.html'; ?>
        </section>
        <section>
            <a class="btn btn-primary" href="new-soci.php">Insertar</a>
            <table class=table mt=5>
                <thead>
                    <tr>
                        <th>DNI</th>
                        <th>NOM</th>
                        <th>LLINATGES</th>
                        <th>NACIONALITAT</th>
                        <th>CORREU ELECTRONIC</th>
                        <th>TELEFON</th>
                        <th>ESTAT SOCI</th>
                        <th>OPCIONS</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = "SELECT * FROM Soci";
                    $result = mysqli_query($dbh, $query);
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "
                            <tr>
                                <td>".$row['DNI']."</td>
                                <td>".$row['Nom']."</td>
                                <td>".$row['Llinatges']."</td>
                                <td>".$row['Nacionalitat']."</td>
                                <td>".$row['correu_electronic']."</td>
                                <td>".$row['Telefon']."</td>
                                <td>".$row['Estat_Soci']."</td>
                                <td>
                                    <a class='btn btn-primary' href='new-soci.php?DNI=".$row['DNI']."'>
                                        <i class='bi bi-pencil-square'></i>
                                    </a>
                                    <a class='btn btn-danger' href='scripts/delete-soci.php?DNI=".$row['DNI']."'>
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