<!DOCTYPE html>
<html>

<head>
    <title>New Llibre</title>
</head>
<?php include 'includes/head.php'; ?>

<?php
$Llibre = null;
if(isset($_GET['id'])){
    $id_llibre = $_GET['id'];
    $query = "SELECT * FROM Llibre WHERE id = '$id_llibre' ";
    $result = mysqli_query($dbh, $query) or die(mysqli_error($dbh));
    $Llibre = mysqli_fetch_assoc($result);
}

if ($Llibre != null) {
    $action = 'scripts/update-llibre.php';
} else {
    $action = 'scripts/insert-llibre.php';
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
                if ($Llibre == null)
                    echo 'NOU LLIBRE';
                else
                    echo "EDITA EL LLIBRE";
                ?>
            </h1>
        </section>
        <section>
            <form action="<?=$action ?>" method="POST">
                <div class="form-group">
                    <label for="Titol">Titol</label>
                    <input value="<?=$Llibre['Titol']; ?>" type="text" name="title" class="form-control" placeholder="Titol" maxlength="65" required>
                </div>
                <div class="form-group">
                    <label for="Genere">Genere</label>
                    <input value="<?=$Llibre['Genere'];?>" type="varchar" name="genre" class="form-control" placeholder="Genere" maxlength="100" required>
                </div>
                <?php
                if($Llibre) {
                    echo "<input type='hidden' value='".$Llibre['id']."' name='id'>";
                }
                ?>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </section>
    </div>
</body>

</html>