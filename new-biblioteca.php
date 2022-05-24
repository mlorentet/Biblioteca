<!DOCTYPE html>
<html>

<head>
    <title>New Biblioteca</title>
</head>
<?php include 'includes/head.php'; ?>

<?php
$Biblioteca = null;
if(isset($_GET['id'])){
    $id_biblioteca = $_GET['id'];
    $query = "SELECT * FROM Biblioteca WHERE id = '$id_biblioteca' ";
    $result = mysqli_query($dbh, $query) or die(mysqli_error($dbh));
    $Biblioteca = mysqli_fetch_assoc($result);
}

if ($Biblioteca != null) {
    $action = 'scripts/update-biblioteca.php';
} else {
    $action = 'scripts/insert-biblioteca.php';
}
?>

<body>
    <div class="container">
        <section class="mb-5 mt-5">
            <?php
            include 'includes/header.html';
            ?>
            <h1 class="mb-5 mt-5">
                <?php
                if ($Biblioteca == null)
                    echo 'NOVA BIBLIOTECA';
                else
                    echo "EDITA LA BIBLIOTECA";
                ?>
            </h1>
        </section>
        <section>
            <form action="<?=$action ?>" method="POST">
                <div class="form-group">
                    <label for="Ciutat">Ciutat</label>
                    <input value="<?= $Biblioteca['Ciutat']; ?>" type="text" name="city" class="form-control" placeholder="Ciutat" maxlength="65" required>
                </div>
                <div class="form-group">
                    <label for="Direccio">Direccio</label>
                    <input value="<?=$Biblioteca['Direccio']; ?>" type="text" name="address" class="form-control" placeholder="Direcció" maxlength="100" required>
                </div>
                <div class="form-group">
                    <label for="Provincia">Provincia</label>
                    <input type="varchar" value="<?=$Biblioteca['Provincia']; ?>" name="province" class="form-control" placeholder="Provincia" maxlength="100" required>
                </div>
                <div class="form-group">
                    <label for="Pais">Pais</label>
                    <input type="varchar" value="<?=$Biblioteca['Pais']; ?>" name="country" class="form-control" placeholder="Pais" maxlength="10" required>
                </div>
                <?php
                if($Biblioteca) {
                    echo "<input type='hidden' value='".$Biblioteca['id']."' name='id'>";
                }
                ?>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </section>
    </div>
</body>

</html>