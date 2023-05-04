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

<section class="" style="background-color: #fff;">
    <div class="container py-5">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-10">
                <div class="card rounded-3 text-black" style="background-color: #E7E7E7;">
                    <div class="row">
                        <div class="col-6">
                            <div class="card-body p-md-5 mx-md-4">

                                <div class="text-center">
                                    <img src="img/logo.png"
                                        style="width: 185px;" alt="logo">

                                </div>

                                <form>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Correo electronico</label>
                                        <input type="email" class="form-control"
                                            aria-describedby="emailHelp" placeholder="Ingresa un correo electronico" required>

                                    </div>
                                    <div class="form-group my-3">
                                        <label for="exampleInputPassword1">Contraseña</label>
                                        <input type="password" class="form-control" placeholder="Ingresa tu contraseña" required>
                                        <small class="form-text text-muted">Tú contraseña nunca será
                                            compartida</small>
                                    </div>
                                    <div class="">
                                        <p>¿No tienes cuenta? Registrate <a href="register.php">aquí</a></p>
                                    </div>
                                    <button type="submit" class="btn btn-primary my-3">Iniciar sesión</button>
                                </form>

                            </div>
                        </div>
                        <div class="col-lg-6 d-flex align-items-center" id="sBloqueLogin">
                            <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                                <h4 class="mb-4">Cine View</h4>
                                <p class="fs-4 mb-0">Somos una pagina web con el proposito de que todos nuestros usuarios 
                                  puedan hacer reseñas de un amplio Catalogo de Peliculas para que nuestra comunidad puedan 
                                  conocer tu opinion sobre alguna pelicula que tengas interes en ver.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php
include "footer.php";
?>