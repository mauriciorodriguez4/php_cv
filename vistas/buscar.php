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
          <?php
            include "./controlador/buscar_nombre.php";
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
      </tbody>
    </table>