<!DOCTYPE html>
<html>

<head>
    <title>New Llibre</title>
</head>
<?php include 'includes/head.php'; ?>

<?php
$Llibre = null;
if(isset($_GET['IdLlibre'])){
    $id_llibre = $_GET['IdLlibre'];
    $query = "SELECT * FROM Llibre WHERE IdLlibre = '$id_llibre' ";
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
    <section>
    <?php
    include 'includes/header.html';
    ?>
    </section>
    <div class="container">
        <section>
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
                <div class="form-group">
                    <label for="Editorial">Editorial</label>
                    <input value="<?=$Llibre['Nom'];?>" type="varchar" name="name" class="form-control" placeholder="Nom Editorial" maxlength="50" required> 
                </div>
                <?php
                if($Llibre) {
                    echo "<input type='hidden' value='".$Llibre['IdLlibre']."' name='id'>";
                }
                ?>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </section>
    </div>
</body>

</html>