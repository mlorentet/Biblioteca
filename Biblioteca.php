<!DOCTYPE html>
<html>

<?php include 'includes/head.php'; ?>


<body>
    <div class="container">
        <section class="mb='5' mt='5'">
            <?php include 'includes/header.html';?>
        </section>
        <section>
            <a class="btn btn-primary" href="new-biblioteca.php">Insertar</a>    
            <table class="table" mt=5>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>CIUTAT</th>
                        <th>DIRECCIÓ</th>
                        <th>PROVINCIA</th>
                        <th>PAIS</th>
                        <th>OPCIONS</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = "SELECT * FROM Biblioteca";
                    $result = mysqli_query($dbh, $query);
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "
                            <tr>
                                <td>".$row['id']."</td>
                                <td>".$row['Ciutat']."</td>
                                <td>".$row['Direccio']."</td>
                                <td>".$row['Provincia']."</td>
                                <td>".$row['Pais']."</td>
                                <td>
                                    <a class='btn btn-primary' href='new-biblioteca.php?id=".$row['id']."'>
                                        <i class='bi bi-pencil-square'></i>
                                    </a>
                                    <a class='btn btn-danger' href='scripts/delete-biblioteca.php?id=".$row['id']."'>
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