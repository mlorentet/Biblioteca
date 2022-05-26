<!DOCTYPE html>
<html>

<head>
    <title>New Bibliotecari</title>
</head>
<?php include 'includes/head.php'; ?>

<?php
$Bibliotecari = null;
if(isset($_GET['DNI'])){
    $DNI_Bibliotecari = $_GET['DNI'];
    $query = "SELECT * FROM Bibliotecari WHERE DNI = '$DNI_Bibliotecari' ";
    $result = mysqli_query($dbh, $query) or die(mysqli_error($dbh));
    $Bibliotecari = mysqli_fetch_assoc($result);
}

if ($Bibliotecari != null) {
    $action = 'scripts/update-bibliotecari.php';
} else {
    $action = 'scripts/insert-bibliotecari.php';
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
                if ($Bibliotecari == null)
                    echo 'NOU BIBLIOTECARI';
                else
                    echo "EDITA EL BIBLIOTECARI";
                ?>
            </h1>
        </section>
        <section>
            <form action="<?=$action ?>" method="POST">
                <div class="form-group">
                    <label for="DNI">DNI</label>
                    <input value="<?=$Bibliotecari['DNI'];?>" type="varchar" name="dni" class="form-control" placeholder="DNI" pattern="[0-9]{8}[A-Za-z]{1}" title="Introdueix un DNI válid" required>
                </div>
                <div class="form-group">
                    <label for="Nom">Nom</label>
                    <input value="<?=$Bibliotecari['Nom'];?>" type="text" name="name" class="form-control" placeholder="Nom" maxlength="50" required>
                </div>
                <div class="form-group">
                    <label for="Llinatges">Llinatges</label>
                    <input type="varchar" value="<?=$Bibliotecari['Llinatges'];?>" name="surname" class="form-control" placeholder="Llinatges" maxlength="100" required>
                </div>
                <div class="form-group">
                    <label for="correu_electronic">Correu Email</label>
                    <input type="varchar" value="<?=$Bibliotecari['email'];?>" name="email" class="form-control" placeholder=" Email" required>
                </div>
                <div class="form-group">
                    <label for="Estat">Estat Bibliotecari</label>
                    <input type="varchar" value="<?=$Bibliotecari['Estat'];?>" name="state" class="form-control" placeholder="Estat Bibliotecari" required>
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </section>
    </div>
</body>

</html>