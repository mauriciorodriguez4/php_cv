<?php
 include "header.php";
?>

<nav class="navbar navbar-expand-lg w-100 navbar-light bg-light" id="navDesignLogin">

    <div class="col-8 ps-5">
        <a class="navbar-brand" href="catalog.php">
            <img src="./img/logo.png"
                style="width: 110px; height: 110px;" alt="">
        </a>
    </div>
    <div class="collapse navbar-collapse col-4" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link h4" href="catalog.php">Mi catalogo</a>
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
        <!-- Tarjeta -->
        <?php
            include('modelo/conexion.php'); //$conexion
            $query = "SELECT * FROM peliculas p INNER JOIN director d on p.id_director = d.id_director";
            $result = mysqli_query($conexion, $query); // array

            while($pelicula = mysqli_fetch_array($result)) {
        ?>
                <div class="card p-1 ms-5 text-dark col-lg-4" style="width: 18rem;">
                <img src="./img/<?= $pelicula['poster'] ?>" class="card-img-top img-thumbnail" alt="...">
                <div class="card-body mt-2" style="background-color:#E7E7E7; color: black;">
                    <p class="card-text fw-medium"><?= $pelicula['nombre_pelicula'] ?> (<?= $pelicula['estreno'] ?>)</p>
                    <p class="card-text fw-medium"><?= $pelicula['nombre_director'] ?></p>
                    <a href="pag1.php?id=<?= $pelicula['id_pelicula'] ?>" class="btn btn-success">Ver reseñas</a>
                </div>
            </div>

        
            <?php } ?>

            <div class="d-sm-flex align-items-center row my-5">
            </div>
        </div>
</section>

<?php
include "footer.php";
?>