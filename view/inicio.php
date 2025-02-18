<?php
$productos = array(
    "view/img/accesorios.jpeg",
    "view/img/gorras.jpeg",
    "view/img/camping.jpeg",
    "view/img/insignias.jpeg",
    "view/img/gorras.jpeg",
    "view/img/accesorios.jpeg",
    "view/img/gorras.jpeg",
    "view/img/camping.jpeg",
    "view/img/insignias.jpeg",
    "view/img/gorras.jpeg",
    "view/img/accesorios.jpeg",
    "view/img/camping.jpeg",
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
<div class="container-xxl">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="view/img/slider-uno.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="view/img/slider-dos.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="view/img/slider-tres.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="view/img/slider-cuatro.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

<!-- cards -->
<div class="container container_productos">

    <?php
    for ($i = 0; $i <= 2; $i++) {
    ?>
        <div class="card" style="width: 18rem;">
            <img src="<?php echo $productos[$i] ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title fw-bolder" style="color: #1e0941;"><?php echo $nombreP[$i] ?></h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <button type="submit" class="boton_detalle"> <strong>Más info...</strong></button>
            </div>
        </div>
    <?php } ?>

</div>

<!-- ¿quiénes somos? -->

<section>
    <div class="container-fluid d-flex p-2 flex-wrap ">
        <div class="col qsContenido p-3 ">
            <div class="row">
                <h1 class="text-center fw-bold p-3" id="QS">¿QUIÉNES SOMOS?</h1>
            </div>
            <div class="row">
                <p class="p-3">Un grupo de adultos deseando proporcionar a la ciudad un grupo Scout nuevo, dinámico y como otra alternativa a los grupos ya existentes,
                    decidieron en una tarde formar el grupo Scout León Blanco, cuyo nombre se escogió gracias a una condecoración que recibiría el fundador
                    del escultismo Lord Baden Powell al visitar el país de Checoslovaquia (Hoy república Checa) en 1923 y que para él fue de un inmenso valor
                    emocional y de un gran aprecio. Así nacía el grupo Scout León Blanco, siendo la Dirigente Ángela María Cortez la primer jefe de grupo, la
                    primer Akela (Dirigente de manada) María Claudia Cortez, el primer jefe de tropa Nelson Bravo y Javier Darío Lemos, el primer dirigente de
                    Clan. Se toma inicialmente como base el colegio Santa Teresita y después de hacer invitación a niños y jóvenes se inicia actividades formales
                    el 25 de febrero de 1995, contando como el primer joven del grupo a Rodrigo Bejarano. El grupo desde su inicio conto con las tres secciones así:
                    los primeros lobatos Carlos Humberto Varela Jr, Brian Mercado y Diana Carolina Molina. La pañoleta de grupo fue idea de los dirigentes Javier
                    Darío Lemos y Nelson Bravo, quienes después de probar varios colores, vieron que los que más acogida tuvieron fueron Gris, Rojo y Azul a los cuales
                    los muchachos dieron los siguientes significados respectivamente Valor, perseverancia y lealtad. El 23 de abril 1995 se dio reconocimiento oficial
                    al grupo, dejando de ser grupo experimental, debido a que al grupo de dirigentes tenían experiencia en el movimiento y el esquema de formación
                    realizado con lo cual el periodo de prueba era suficiente. Con una fogata, se celebró el evento, entregando por parte del jefe regional la primera
                    pañoleta a Angela Maria Cortez como jefe de grupo, después le siguieron el resto de la jefatura y algunos jóvenes renovaron promesa como fue el caso
                    de Lamia Mercado, Miguel y Oscar Echeverri y Julio Ernesto Mejía.</p>
            </div>
        </div>
        <div class="col qsImg d-flex align-items-center p-3">
            <img src="view/img/imagen.jpeg" alt="" class="m-auto" width="500">
        </div>
        <div class="col d-flex align-items-center justify-content-center p-3 flex-column">
            <div class="row">
                <h2>MISION</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia alias, tempore cumque eligendi ducimus harum vitae iste asperiores cupiditate eos fugit doloremque. Officiis nulla iure natus nesciunt excepturi et, laborum molestiae dolorem quos hic? Neque, quod architecto est non optio eos laboriosam, odio assumenda tenetur aperiam minus aliquam in placeat?</p>
            </div>
            <div class="row">
                <h2>VISION</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam minus voluptas ab perspiciatis alias repellat quisquam modi. Sequi vel rem atque quos expedita nulla temporibus itaque molestiae autem laborum, soluta repudiandae, natus dolores? Illum atque obcaecati repudiandae cumque labore enim et quaerat, debitis autem cupiditate alias numquam delectus ducimus odio.</p>
            </div>
        </div>
    </div>
</section>