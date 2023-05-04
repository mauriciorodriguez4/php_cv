<?php
include "../header.php";
?>

<nav class="navbar navbar-expand-lg w-100 navbar-light bg-light" id="navDesignLogin">

    <div class="col-8 ps-5">
        <a class="navbar-brand" href="#">
            <img src="./img/logo.png" style="width: 110px; height: 110px;" alt="">
        </a>
    </div>
    <div class="collapse navbar-collapse col-4" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link h4" href="#">Inicio <span class="sr-only"></span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link h4" href="catalog.html">Mi catalogo</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle h4" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Genero
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Accion</a></li>
                    <li><a class="dropdown-item" href="#">Suspenso</a></li>
                    <li><a class="dropdown-item" href="#">Romance</a></li>
                </ul>
            </li>
            </li>
        </ul>
    </div>
</nav>

<d class="row">
    <div class="col-sm-12 col-lg-4 col-md-12 my-5 ps-5">
        <img class="img-thumbnail rounded float-start" src="./img/avengers.jpg" alt=""
            style="height: 700; height: 700px;">
    </div>

    <div class="col-lg-8 p-5">
        <div id="title">
            <h1 style="color:white">Avengers: Infinity War</h1>
        </div>
        <div class="mt-5">
            <p style="color: white;">A medida que los Vengadores y sus aliados han seguido protegiendo al mundo de
                amenazas demasiado grandes para que cualquier otro héroe las pueda manejar, un nuevo peligro surge desde
                las sombras cósmicas: Thanos, un déspota de la infamia intergaláctica, su objetivo es hacerse con las
                seis Gemas del Infinito, artefactos de poder inimaginable, y usarlas para infligir su torcida voluntad
                en toda la realidad. Todo por lo que han estado luchando los Vengadores ha conducido a este momento - el
                destino de la Tierra y la existencia misma jamás han sido tan inciertos.</p>
        </div>


        <div class="my-5">
            <div>
                <p>
                <h4 style="color:white">Calificación</h4>
                </p>
            </div>

            <div class="card p-3 my-3" style="background-color: black; color: white;">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="ratings">
                        <i class="fa fa-star rating-color"></i>
                        <i class="fa fa-star rating-color"></i>
                        <i class="fa fa-star rating-color"></i>
                        <i class="fa fa-star rating-color"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <h5 class="review-count">12 Reseñas</h5>
                </div>
            </div>
        </div>
        
        <?php
            $usuario = "usuario";
            $contrasena = "constrasena";
            $correo = "correo";
            $conn = new mysqli($servername, $username, $password, $dbname);
            if ($conn->connect_error) {
                die("Error en la conexión a la base de datos: " . $conn->connect_error);
            }

            // Recuperar datos del formulario
            $movie_id = $_POST['movie_id'];
            $reviewer_name = $_POST['reviewer_name'];
            $review_text = $_POST['review_text'];

            // Insertar reseña en la base de datos
            $sql = "INSERT INTO reviews (movie_id, reviewer_name, review_text) VALUES ('$movie_id', '$reviewer_name', '$review_text')";
            if ($conn->query($sql) === TRUE) {
                echo "Reseña añadida correctamente";
            } else {
                echo "Error al añadir reseña: " . $sql . "<br>" . $conn->error;
            }

            // Cerrar la conexión a la base de datos
            $conn->close();
            ?>

<?php
include "../footer.php";
?>