<?php
// require_once 'config/config.php';
// require_once 'model/db.php';

require 'template/header.php';
 


$productos = array(
    "img/accesorios.jpeg",
    "img/gorras.jpeg",
    "img/camping.jpeg",
    "img/insignias.jpeg",
    "img/gorras.jpeg",
    "img/accesorios.jpeg",
    "img/gorras.jpeg",
    "img/camping.jpeg",
    "img/insignias.jpeg",
    "img/gorras.jpeg",
    "img/accesorios.jpeg",
    "img/camping.jpeg",
);
$nombreP = array(
    "Accesorios",
    "Gorras",
    "Camping",
    "Insignias",
    "Gorras",
    "Accesorios",
    "Gorras",
    "Camping",
    "Insignias",
    "Gorras",
    "Accesorios",
    "Camping",
);
$n = count($productos) - 1;
?>
<!-- <link rel="stylesheet" href="css/style.css"> -->
<div class="titulo_productos">
    <h1 class="fs-1 text text-wrap">PRODUCTOS</h1>
</div>

<div class="container container_productos">

    <?php
    for ($i = 0; $i <= $n; $i++) {
    ?>
        <div class="card" style="width: 18rem;">
            <img src="<?php echo $productos[$i] ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title fw-bolder" style="color: #1e0941;"><?php echo $nombreP[$i] ?></h5>
                <p class="card-text"><strong>Precio:</strong> $$$$$$$ </p>
                <button type="submit" class="boton_detalle"> <strong>Más info...</strong></button>
            </div>
        </div>
    <?php } ?>

</div>
<?php
require 'template/footer.php';

?>