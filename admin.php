<?php
 include "header.php";
?>
<nav class="navbar navbar-expand-lg color-navbar">
    <div class="container-fluid">
      <!--<a class="navbar-brand">CineView</a>//-->
      <img src="img/logo.png" class="tamaño-logo">
      <form class="d-flex">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Administrador
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Cerrar Sesión</a></li>
            </ul>
          </li>
        </ul>
      </form>
    </div>
  </nav>
  <br>
  <div class="container">
    <center>
      <h1 class="tipo-letra">Bienvenido, @Usuario</h1>
    </center>
    <br>
    <div class="container-fluid d-flex align-items-center justify-content-between pelis">
      <form class="d-flex col-3" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-primary" type="submit">Search</button>
      </form>    
      <div class="ms-auto text-center col-4">
        <a href="vistas/crear_pelicula.php" class="btn btn-primary"><strong>+</strong> Agregar pelicula </a>
      </div>
    </div>
    <br>
    <br>
    <table class="table table-striped-columns">
      <thead>
        <tr>
          <th>Poster</th>
          <th>Nombre de la pelicula</th>
          <th>Genero</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><img class="tamaño-img" src=""></td>
          <td>Spiderman-3</td>
          <td>Acción</td>
          <td>
            <div class="dropdown text-center">
              <button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                Acciones...
              </button>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Editar</a></li>
                <li><a class="dropdown-item" href="#">Eliminar</a></li>
              </ul>
            </div>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
<?php
include "footer.php";
?>