<?php
include "header.php";
?>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">CineView</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Lista
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Lista</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Acerca de</a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Buscar</button>
            </form>
        </div>
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
                    <p class="card-text">Los Vengadores y sus superhéroes deben estar dispuestos a sacrificar todo en un
                        intento de derrotar al poderoso Thanos,<br> antes de que sus planes de devastación y ruina ponga
                        fin al universo.</p>
                    <a href="#" class="btn btn-success">Ver reseñas</a>
                </div>
            </div>


            <div class="d-sm-flex align-items-center row my-5">
            </div>
        </div>
</section>

<?php
include "footer.php";
?>