<?php require 'template/header.php'; ?>

<!-- <link rel="stylesheet" href="css/style.css"> -->
<div class="login-container">
        <div class="logo-img">
          <img class="image-container" src="img/662 logo final_page-0001.png" alt="">
        </div>
          <div class="login-info-container">
            <h1 class="title">Recuperar contraseña</h1><br><br><br>
            <form class="inputs-container" action="../Controlador/cActContra.php" method="post">
                <div class="login__field">
                    <i class="login__icon fas fa-user"></i>
                    <input type="text" class="login__input input" placeholder="No. documento" name="documento">
                </div>
                <div class="login__field">
                    <i class="login__icon fas fa-envelope"></i>
                    <input type="text" class="login__input input" placeholder="Correo" name="correo">
                </div>
                <div class="login__field">
                    <i class="login__icon fas fa-lock"></i>
                    <input type="password" class="login__input input" name="contrasena" placeholder="Nueva contraseña">
                </div>
                <br><br>
                
                <button class="button login__submit" type="submit">
                    <span class="button__text">RECUPERAR</span>
                    <!-- <i class="button__icon fas fa-chevron-right"></i> -->
                </button>	
                <br>
                <br>
                <br>
            </form>
          </div>
      </div>

      <?php require 'template/footer.php'; ?>