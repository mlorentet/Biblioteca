<!DOCTYPE html>
<html>

<head>
    <title>New Autor</title>
</head>
<?php include 'includes/head.php'; ?>

<?php
$Autor = null;
if (isset($_GET['DNI'])) {
    $DNI_Autor = $_GET['DNI'];
    $query = "SELECT * FROM Autor WHERE DNI = '$DNI_Autor' ";
    $result = mysqli_query($dbh, $query) or die(mysqli_error($dbh));
    $Autor = mysqli_fetch_assoc($result);
}

if ($Autor != null) {
    $action = 'scripts/update-autor.php';
} else {
    $action = 'scripts/insert-autor.php';
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
                if ($Autor == null)
                    echo 'NOU AUTOR';
                else
                    echo "EDITA L'AUTOR";
                ?>
            </h1>
        </section>
        <section>
            <form action="<?= $action ?>" method="POST">
                <div class="form-group">
                    <fieldset>
                        <label for="DNI">DNI</label>
                        <input value="<?= $Autor['DNI']; ?>" type="text" name="dni" class="form-control" placeholder="Introdueix el DNI" pattern="[0-9]{8}[A-Za-z]{1}" title="Debe poner 8 números y una letra" required>
                    </fieldset>

                </div>
                <div class="form-group">
                    <fieldset>
                        <label for="Nom">Nom</label>
                        <input value="<?= $Autor['Nom']; ?>" type="text" name="name" class="form-control" placeholder="Introdueix el Nom" maxlength="65" required>
                    </fieldset>
                </div>
                <div class="form-group">
                    <fieldset>
                        <label for="Llinatges">Llinatges</label>
                        <input value="<?= $Autor['Llinatges']; ?>" type="text" name="surname" class="form-control" placeholder="Introdueix els Llinatges" maxlength="100" required>
                    </fieldset>
                </div>
                <div class="form-group">
                    <fieldset>
                        <label for="correu_electronic">Correu Electronic</label>
                        <input type="email" value="<?= $Autor['correu_electronic']; ?>" name="email" class="form-control" placeholder="Introdueix el correu electronic" maxlength="100" required>
                    </fieldset>
                </div>
                <div class="form-group">
                    <fieldset>
                        <label for="Telefon">Telefon</label>
                        <input type="tel" value="<?= $Autor['Telefon']; ?>" name="phone" class="form-control" placeholder="Introdueix el Telefon" maxlength="10" required>
                    </fieldset>
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </section>
    </div>
</body>

</html>