<!DOCTYPE html>
<html>

<head>
    <title>New Editorial</title>
</head>
<?php include 'includes/head.php'; ?>

<?php
$Editorial = null;
if(isset($_GET['id'])){
    $id_editorial = $_GET['id'];
    $query = "SELECT * FROM Editorial WHERE id = '$id_editorial' ";
    $result = mysqli_query($dbh, $query) or die(mysqli_error($dbh));
    $Editorial = mysqli_fetch_assoc($result);
}

if ($Editorial != null) {
    $action = 'scripts/update-editorial.php';
} else {
    $action = 'scripts/insert-editorial.php';
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
                if ($Editorial == null)
                    echo 'NOVA EDITORIAL';
                else
                    echo "EDITA L'EDITORIAL";
                ?>
            </h1>
        </section>
        <section>
            <form action="<?=$action ?>" method="POST">
                <div class="form-group">
                    <label for="Ciutat">Ciutat</label>
                    <input value="<?=$Editorial['Ciutat']; ?>" type="text" name="city" class="form-control" placeholder="Ciutat" maxlength="65" required>
                </div>
                <div class="form-group">
                    <label for="Direccio">Direccio</label>
                    <input value="<?=$Editorial['Direccio'];?>" type="varchar" name="address" class="form-control" placeholder="Direccio" maxlength="100" required>
                </div>
                <div class="form-group">
                    <label for="CP">Codi Postal</label>
                    <input type="text" value="<?=$Editorial['CP'];?>" name="CP" class="form-control" placeholder=" Codi Postal" required>
                </div>
                <div class="form-group">
                    <label for="Provincia">Provincia</label>
                    <input type="varchar" value="<?=$Editorial['Provincia'];?>" name="province" class="form-control" placeholder="Provincia" required>
                </div>
                <div class="form-group">
                    <label for="Pais">Pais</label>
                    <input type="varchar" value="<?=$Editorial['Pais'];?>" name="country" class="form-control" placeholder="Pais" required>
                </div>
                <?php
                if($Editorial) {
                    echo "<input type='hidden' value='".$Editorial['id']."' name='id'>";
                }
                ?>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </section>
    </div>
</body>

</html>