<?php require 'template/header.php'; ?>

<!-- <link rel="stylesheet" href="css/style.css"> -->
<div class="container__registro">
        <form class="form" method="post" action="../Controlador/cregister.php">

            <h2 class="form_title">Registro Scouts</h2>
            <div class="container__imagen">
                <img src="/scout_mvc/view/img/662 logo final_page-0001.png" alt="" width="130" heigth="130">
            </div>
            <div class="form_container">
                <div class="form_group">
                    <input type="text" id="nombres" class="form_input" name="nombres" placeholder="Nombres" required>
                </div>
                <div class="form_group">
                    <input type="text" id="apellido1" class="form_input" name="apellido1" placeholder="Primer apellido" required maxlength="20" minlength="3">
                </div>
                <div class="form_group">
                    <input type="text" id="apellido2" class="form_input" name="apellido2" placeholder="Segundo apellido" required maxlength="20" minlength="3" >
                </div>
                <div class="form_group">
                    <!-- <input type="text" id="direccion" class="form_input" placeholder="Tipo de documento" required > -->
                    <select name="tipodoc" id="tipodoc" class="form_input" required >
                        <option disabled selected value>Tipo de documento</option>
                        <option value="TI">Tarjeta de Identidad</option>
                        <option value="CC">Cédula de Ciudadania</option>
                        <option value="CE">Cédula de Extranjería</option>
                    </select>
                </div>
                <div class="form_group">
                    <input type="text" id="documento" class="form_input" name="documento" placeholder="Número de documento" maxlength="11" minlength="7" required>
                </div>
                <div class="form_group" id="tooltip">
                    <input type="date" id="fecha_nacimiento" class="form_input" name="fecha_nacimiento" placeholder="Fecha de nacimiento" required>
                    <span class="tooltiptext">Fecha de nacimiento</span>
                </div>
                <div class="form_group">
                    <input type="tel" id="telefono" class="form_input" name="telefono" maxlength="10" required placeholder="Número de celular">
                </div>
                <div class="form_group">
                    <input type="text" id="direccion" class="form_input" name="direccion" placeholder="Dirección" required>
                </div>

                <div class="form_group">
                    <input type="text" id="eps" class="form_input" name="eps" placeholder="EPS" required>
                </div>
                <div class="form_group">
                    <!-- <input type="text" id="direccion" class="form_input" placeholder="Tipo de documento" required > -->
                    <select name="rh" id="rh" class="form_input" required>
                        <option disabled selected value>RH</option>
                        <option value="A+">A +</option>
                        <option value="A-">A -</option>
                        <option value="B+">B +</option>
                        <option value="B-">B -</option>
                        <option value="AB+">AB +</option>
                        <option value="AB-">AB -</option>
                        <option value="O+">O +</option>
                        <option value="O-">O -</option>
                    </select>
                </div>
                <div class="form_group">
                    <!-- <input type="text" id="direccion" class="form_input" placeholder="Tipo de documento" required > -->
                    <select name="genero" id="genero" class="form_input" required>
                        <option disabled selected value>Género</option>
                        <option value="M">Masculino</option>
                        <option value="F">Femenino</option>
                    </select>
                </div>
                <div class="form_group">
                    <!-- <input type="text" id="direccion" class="form_input" placeholder="Tipo de documento" required > -->
                    <select name="grupo_anterior" id="grupo_anterior" class="form_input" required>
                        <option disabled selected value>Grupo Anterior</option>
                        <option value="Si">Si</option>
                        <option value="No">No</option>
                    </select>
                </div>
                <div class="form_group">
                    <input type="text" id="ciudad" class="form_input" name="ciudad" placeholder="Ciudad" required>
                </div>
                <div class="form_group">
                    <input type="email" id="correo" name="correo" class="form_input" name="correo" required placeholder="Correo">
                </div>
                <div class="form_group">
                    <input type="password" id="contrasena" class="form_input" name="contrasena" placeholder="Ingresar contraseña" required>
                </div>
                <div class="form_group" id="rol">
                    <!-- <input type="text" id="direccion" class="form_input" placeholder="Tipo de documento" required > -->

                    <select name="rol" id="rol" class="form_input" required>
                        <option disabled selected value>Rol</option>
                        <option value="Admin">Administrador</option>
                        <option value="Scout">Scout</option>
                        <option value="Acudiente">Acudiente</option>
                    </select>

                </div>
                <div class="form_checkbox">
                    <input type="checkbox" id="terminos" class="form_check" value="terminos" required>
                    <a id="btn-abrir-popup"><label for="terminos" class="form_label" id="btn-abrir-popup">Aceptar términos y condiciones</label></a>
                </div>

                <div class="form_text">
                    <input type="submit" id="btn-abrir-popup-1" class="form_submit" value="Registrarse">
                </div>

                <div class="form_text">
                    <p>¿Ya tienes una cuenta? <span class="span"><a class="iniciar" href="/scout_mvc/view/login.php" style="text-decoration: none;">Inicia sesión aquí </a></span></p>
                </div>
            </div>
        </form>
    </div>

    <?php require 'template/footer.php'; ?>