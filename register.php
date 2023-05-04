<?php
 include "header.php";
?>

<nav class="navbar navbar-expand-lg w-100 navbar-light bg-light" id="navDesignRegister">

    <div class="col-8 ps-5">
        <a class="navbar-brand" href="#">
            <img src="img/logo.png" style="width: 110px; height: 110px;" alt="">
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

<section class="">
    <div class="container py-5">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-10">
                <div class="card rounded-3 text-black" style="background-color: #E7E7E7;">
                    <div class="row">
                        <div class="col-6">
                            <div class="card-body p-md-5 mx-md-4">

                                <div class="text-center">
                                    <img src="img/logo.png" style="width: 185px;" alt="logo">

                                </div>
                                <?php
                                // include "./modelo/conexion.php";
                                // include "controlador/registro_controlador.php";
                                ?>

                                <div>
                                    <p>Ingresa los siguientes datos para el registro:</p>
                                </div>

                                <form action="controlador/registro_controlador.php" method="POST">
                                    <div class="my-3">
                                        <label>Nombre</label>
                                        <input type="text" class="form-control" name="nombres"
                                            placeholder="Ingresa tu nombre" required>
                                    </div>

                                    <div class="my-3">
                                        <label>Apellido</label>
                                        <input type="text" class="form-control" name="apellidos"
                                            placeholder="Ingresa tu apellido" required>
                                    </div>

                                    <div class="my-3">
                                        <label>Usuario</label>
                                        <input type="text" class="form-control" name="usuario"
                                            placeholder="Ingresa tu nombre usuario" required>
                                    </div>

                                    <div class="my-3">
                                        <label>Correo electronico</label>
                                        <input type="text" class="form-control" name="correo"
                                            placeholder="Ingresa un correo electronico" required>
                                    </div>

                                    <div class="my-3">
                                        <label>Contraseña</label>
                                        <input type="password" class="form-control" name="contrasena"
                                            placeholder="Ingresa tu contraseña" required>
                                    </div>

                                    <button type="submit" class="btn btn-primary my-3"
                                        name="btnRegistrar">Registrate</button>
                                    <p class="fst-italic" style="font-weight: 400;">Si te registras, estarás de acuerdo
                                        con las Condiciones de Uso y Politica de privacidad que tiene CineView</p>

                                </form>

                            </div>
                        </div>
                        <div class="col-lg-6 d-flex py-5" id="sBloqueRegister">
                            <div class="text-white px-3 py-5 p-md-2 mx-md-4">
                                <h4 class="mb-4">Al registrarte con nosotros disfrutas los siguientes beneficios</h4>
                                <ul class="">
                                    <p class="my-5"> <b>Contribución</b> <br>
                                        Añade reseñas de todas las peliculas de nuestro catalogo para que todos conozcan
                                        tu opinión.
                                    </p>
                                    <p class="my-5"><b>Personalización</b> <br>
                                        Las peliculas recomendadas serán en base a las que hayas reseñado.
                                    </p>
                                    <p class="my-5"><b>Anticipo</b> <br>
                                        Recibe e-mails que te notifiquen antes que todos las peliculas más recientes.
                                    </p>
                                </ul>
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