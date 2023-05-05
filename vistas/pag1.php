<?php
include "../header.php";
?>

<nav class="navbar navbar-expand-lg w-100 navbar-light bg-light" id="pagDesign">

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

<div class="row" id="pagDesign">
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
            include "./agregar_res.php";
            while($peli = mysqli_fetch_array($result_pelis)) { ?>
        <tr>
        <!--  -->
          <td>
            <div clas="d-flex justify-content-center">
              <img class="" src="./img/<?= $peli['poster'] ?>" width="100em" height="120em">
            </div>
          </td>
          <td><?= $peli['nombre_pelicula'] ?></td>
          <td><?= $peli['nombre_genero'] ?></td>
          <td>
            <div class="dropdown text-center">
              <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Acciones...
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="./vistas/editar_pelicula.php">Editar</a></li>
                <li><a class="dropdown-item" href="#">Eliminar</a></li>
              </ul>
            </div>
          </td>
        </tr>
        <?php } ?>

<?php
include "../footer.php";
?>