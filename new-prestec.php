<!DOCTYPE html>
<html>

<head>
    <title>New Prestec</title>
</head>
<?php include 'includes/head.php'; ?>

<?php
$Prestec = null;
if(isset($_GET['IdPrestec'])){
    $id_prestec = $_GET['IdPrestec'];
    $query = "SELECT * FROM Prestec WHERE IdPrestec = '$id_prestec' ";
    $result = mysqli_query($dbh, $query) or die(mysqli_error($dbh));
    $Prestec = mysqli_fetch_assoc($result);
}

if ($Prestec != null) {
    $action = 'scripts/update-prestec.php';
} else {
    $action = 'scripts/insert-prestec.php';
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
                if ($Prestec == null)
                    echo 'NOU PRESTEC';
                else
                    echo "EDITA EL PRESTEC";
                ?>
            </h1>
        </section>
        <section>
            <form action="<?=$action ?>" method="POST">
                <div class="form-group">
                    <label for="Duracio">Duracio</label>
                    <input value="<?=$Prestec['Duracio']; ?>" type="text" name="duration" class="form-control" placeholder="Duracio" maxlength="65" required>
                </div>
                <div class="form-group">
                    <label for="Data Inici">Data Inici</label>
                    <input value="<?=$Prestec['Data_Inici'];?>" type="varchar" name="start_date" class="form-control" placeholder="Data Inici" maxlength="100" required>
                </div>
                <div class="form-group">
                    <label for="Data Finalitzacio">Data Finalitzacio</label>
                    <input value="<?=$Prestec['Data_Finalitzacio'];?>" type="varchar" name="final_date" class="form-control" placeholder="Data Finalitzacio" maxlength="100" required>
                </div>
                <div class="form-group">
                    <label for="Estat">Estat</label>
                    <input value="<?=$Prestec['Estat'];?>" type="varchar" name="state" class="form-control" placeholder="Estat" maxlength="100" required>
                </div>
                <?php
                if($Prestec) {
                    echo "<input type='hidden' value='".$Prestec['IdPrestec']."' name='id'>";
                }
                ?>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </section>
    </div>
</body>

</html>