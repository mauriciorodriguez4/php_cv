<?php
include "header.php";
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

<!-- Tarjeta -->
<?php
    include('modelo/conexion.php'); // $conexion
    if( isset($_GET['id']) ) {
        $id_peli = $_GET['id'];

        $query_peli = "select * from peliculas where id_pelicula = '$id_peli '";
        $result_peli = mysqli_query($conexion, $query_peli);
        $peli = mysqli_fetch_array($result_peli);

    }
?>
<div class="row bg-dark" id="pagDesign">
    <div class="col-sm-12 col-lg-4 col-md-12 my-5 ps-5">
        <img class="img-thumbnail rounded float-start" src="img/<?= $peli['poster'] ?>" alt=""
            style="height: 700; height: 700px;">
    </div>


    <div class="col-lg-8 p-5">
        <div id="title">
            <h1 style="color:white"><?= $peli['nombre_pelicula'] ?></h1>
        </div>
        <div class="mt-5">
            <p style="color: white;"><?= $peli['sinopsis'] ?></p>
        </div>


        <div class="my-5">
            <div>
                <p>
                <h4 style="color:white">Calificación</h4>
                </p>
            </div>

            <?php
                $query_resenas = "SELECT * FROM resenas WHERE pelicula_id = '$id_peli' ";
                $result_resenas = mysqli_query($conexion, $query_resenas);
                $num_resenas = mysqli_num_rows($result_resenas);
                $resenas = mysqli_fetch_array($result_resenas);
            ?>

            <div class="card p-3 my-3" style="background-color: black; color: white;">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="ratings">
                        <i class="fa fa-star rating-color"></i>
                        <i class="fa fa-star rating-color"></i>
                        <i class="fa fa-star rating-color"></i>
                        <i class="fa fa-star rating-color"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <h5 class="review-count"><?= $num_resenas ?> reseñas</h5>
                </div>
            </div>
        </div>

        <div class="dropdown text-center">
                <a class="" href="vistas/agregar_res.php?id=<?= $resenas['pelicula_id'] ?>">
                    <button class="btn btn-primary " type="button">Escribir reseña</button>
                </a>
        </div>
</div>
<?php
include "footer.php";
?>