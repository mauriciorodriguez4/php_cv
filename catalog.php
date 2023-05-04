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

  <div class="justify-content-center align-items-center">
        <div class="card-body p-md-5 mx-md-4">
            <table class="table caption-top table-responsive text-center" style="background-color: #E7E7E7;">
                <caption class="h2" style="font-weight: 600;">Tu catalogo</caption>
                <thead>
                <tr>
                    <th scope="col">Vista</th>
                    <th scope="col">#ID</th>
                    <th scope="col">Autor</th>
                    <th scope="col">Titulo</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Genero <br> principal</th>
                    <th scope="col">Vista previa</th>
                </tr>
                </thead>

                <tbody>
                    
                <tr class="">
                    <th scope="row">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault1" unchecked/>
                        </div>
                    </th>
                    <th scope="row">1</th>
                    <td>Robert D Niro</td>
                    <td>El padrino</td>
                    <td>Don Vito Corleone es el respetado y temido jefe de una de las cinco familias de la mafia de Nueva York en los años 40.<br> El hombre tiene cuatro hijos: Connie, Sonny, Fredo y Michael, que no quiere saber nada de los negocios sucios de su padre. <br> otro capo, Sollozzo, intenta asesinar a Corleone, empieza una cruenta lucha entre los distintos clanes.</td>
                    <td class="badge rounded-pill bg-warning p-3 mt-5">Drama</td>
                    <td><a href="peliView.html">
                        <img src="./img/godfather.png" alt="" style="height: 100px; width: 100px;">
                    </a>    
                    </td>
                </tr>

                <tr class="">
                    <th scope="row">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault1" unchecked/>
                        </div>
                    </th>
                    <th scope="row">1</th>
                    <td>Anthony Russo</td>
                    <td>Avengers: Infinity War</td>
                    <td>Los Vengadores y sus superhéroes deben estar dispuestos a sacrificar todo en un intento de derrotar al poderoso Thanos,<br> antes de que sus planes de devastación y ruina ponga fin al universo.</td>
                    <td class="badge rounded-pill bg-danger p-3 mt-5">Accion</td>
                    <td><a href="peliView2.html">
                        <img src="./img/avengers.jpg" alt="" style="height: 100px; width: 100px;">
                    </a>
                </tr>
                
                <tr class="">
                    <th scope="row">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault1" unchecked/>
                        </div>
                    </th>
                    <th scope="row">1</th>
                    <td>Phil Lord</td>
                    <td>LEGO Movie</td>
                    <td>Emmet, una figurilla ordinaria de LEGO, es identificada por error como la persona más extraordinaria y la clave para salvar al mundo. <br> Se ve entonces acompañada por un grupo de desconocidos y juntos se embarcan en una búsqueda para vencer a un terrible tirano con planes malvados.</td>
                    <td class="badge rounded-pill bg-info p-3 mt-5">Animación</td>
                    <td><img src="./img/lego.jpg" alt="" style="height: 100px; width: 100px;">
                    </td>
                </tr>

                </tbody>
            </table>
        </div>     
  </div>

<?php
include "footer.php";
?>