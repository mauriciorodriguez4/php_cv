<?php
include "header.php";
?>

<nav class="navbar navbar-expand-lg w-100 navbar-light bg-light" id="navDesignRegister">

    <div class="col-8 ps-5">
        <a class="navbar-brand" href="#">
            <img src="./img/5901B4C9-09D8-46D5-AB19-07C1A38BBA93-removebg-preview.png"
                style="width: 110px; height: 110px;" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>

    <div class="collapse navbar-collapse col-4" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link h4" href="#">Inicio <span class="sr-only"></span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link h4" href="catalog.html">Mi catalogo</a>
            </li>
            <li class="nav-item">
                <a class="nav-link h4" href="./login.html">Login</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle h4" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Productos
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Romance</a>
                    <a class="dropdown-item" href="#">Accion</a>
                    <a class="dropdown-item" href="#">Drama</a>
                </div>
            </li>
        </ul>
    </div>
</nav>

<div class="row">
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


    </div>

</div>

<?php
include "footer.php";
?>