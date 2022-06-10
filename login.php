<!DOCTYPE html>
<html>

<head>
    <title>Formulari Login</title>
</head>
<?php include 'includes/head.php'; ?>

<body class="d-flex flex-column min-vh-100">
    <section>
        <?php include 'includes/header.html' ?>
    </section>
<<<<<<< HEAD
    <div class="container" style="display: flex; align-items: center; justify-content: center;">
=======
    <div class="container">
>>>>>>> main
        <section class="mb-5 mt-5">
            <h2>
                Inicia Sessió amb el teu compte
            </h2>
            <form>
                <div class="form-group">
                    <fieldset>
                        <label for="Usuari">Usuari</label>
<<<<<<< HEAD
                        <input type="text" class="form-control" placeholder="Usuari" required />
=======
                        <input type="text" placeholder="Usuari" required />
>>>>>>> main
                    </fieldset>
                </div>
                <div class="form-group">
                    <fieldset>
                        <label for="Contrasenya">Contrasenya</label>
<<<<<<< HEAD
                        <input type="password" class="form-control" id="myInput" placeholder="Contrasenya">
=======
                        <input type="password" id="myInput" placeholder="Contrasenya">
>>>>>>> main
                    </fieldset>
                </div>
                <div>
                    <input type="checkbox" onclick="myFunction()">Mostra la Contrasenya
                    <script>
                        function myFunction() {
                            var x = document.getElementById("myInput");
                            if (x.type === "password") {
                                x.type = "text";
                            } else {
                                x.type = "password";
                            }
                        }
                    </script>
                </div>
                <div class="login-reset-button">
                    <button type="reset" class="btn btn-danger">Reiniciar</button>
                </div>
                <div class="login-submit-button">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
            </form>
        </section>
    </div>
    <?php include 'includes/footer.php' ?>
</body>

</html>