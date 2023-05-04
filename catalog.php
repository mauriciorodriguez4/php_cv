<?php
 include "header.php";
?>

<nav class="navbar navbar-expand-lg w-100 navbar-light bg-light" id="navDesignLogin">

    <div class="col-8 ps-5">
        <a class="navbar-brand" href="#">
            <img src="./img/logo.png"
                style="width: 110px; height: 110px;" alt="">
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
          <a class="nav-link dropdown-toggle h4" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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

<section class="text-light mt-5 text-center">
    <div class="container p-5" style="background-color: #E7E7E7;">
        <div class="d-sm-flex align-items-center row">

            <div class="card p-1 ms-5  col-lg-4" style="width: 18rem;">
                <img src="./img/avengers.jpg" class="card-img-top img-thumbnail" alt="...">
                <div class="card-body mt-2" style="background-color:#E7E7E7; color: black;">
                    <h3 class="card-title">Avengers: Infinity War</h3>
                    <h5 class="card-title">Anthony Russo</h5>
                    <p class="card-text"></p>
                    <a href="vistas/pag1.php" class="btn btn-success">Ver reseñas</a>
                </div>
            </div>


            <div class="d-sm-flex align-items-center row my-5">
            </div>
        </div>
</section>

<?php
include "footer.php";
?>