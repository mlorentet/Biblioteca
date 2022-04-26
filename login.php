<!DOCTYPE html>
<html>
<div class="body-login">

    <body>
        <?php include 'includes/header.html' ?>
        <?php include 'includes/head.html' ?>
        <div class="log-form">
            <h2>
                Login to your account
            </h2>
            <div class="login-usuari">
                <input type="text" placeholder="Usuari" required />
            </div>
            <div class="login-password">
                <input type="password" id="myInput" placeholder="Contrasenya">
            </div>
            <div class="login-mostra-la-contrasenya">
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
            <div class="login-submit-button">
                <input type="submit" value="Enviar" />
            </div>
            <div class="login-reset-button">
                <input type="reset" value="Reiniciar" />
            </div>
            <div class="login-forgot-password">
                <a class="forgot" href="forgot_password.php">Forgot Password</a>
            </div>
            </form>
        </div>
        <?php include 'includes/footer.html' ?>
    </body>
</div>

</html>