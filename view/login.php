<title>Login</title>
<?php require 'template/header.php'; ?>
<!-- <link rel="stylesheet" href="css/style.css"> -->
<div class="login-container">
        <div class="logo-img">
            <img class="image-container" src="img/662 logo final_page-0001.png" alt="">
        </div>
        <div class="login-info-container">
            <h1 class="title">Iniciar Sesión</h1><br><br><br>
            <form class="inputs-container" method="post" action="../Controlador/clogin.php">
                <div class="login__field">
                    <i class="login__icon fas fa-user"></i>
                    <input type="text" class="login__input input" name="documento" placeholder="Usuario" required>
                </div>
                <div class="login__field">
                    <i class="login__icon fas fa-lock"></i>
                    <input type="password" class="login__input input" name="contrasena" placeholder="Contraseña" required>
                </div><br><br>
                <p>¿Olvidaste la contraseña? <span class="span"><a id="click" style="color: #1e0941; text-decoration: none;" href="/scout_mvc/view/rcontra.php">Click aquí</a> </span></p>
                <button class="button login__submit" type="submit">
                    <span class="button__text">Ingresar</span>
                    <!-- <i class="button__icon fas fa-chevron-right"></i> -->
                </button>
                <br>
                <br>
                <br>
                <p>¿No tiene una cuenta? <span class="span"> <a style="color: #1e0941; text-decoration: none;" href="/scout_mvc/view/register.php">Registrarse</a></span></p>
            </form>
        </div>
    </div>

    <?php require 'template/footer.php'; ?>