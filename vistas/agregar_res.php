<?php include('../header.php'); ?>

<?php
    include('../modelo/conexion.php');
    include ("../controlador/agregar_reseña.php");
    
    if(isset($_POST["btn-agregar_res"])){
      $id_pelicula=$_POST["id_pelicula"];
      $sql=$conexion->query("Select * from peliculas where id_pelicula=$id_pelicula");
    /*$id_pe = "Select * from peliculas where id_pelicula=$id_pelicula;";
    $id_pe_result = mysqli_query($conexion, $id_pe);*/

      $id_usuario=$_POST["id_usuario"];
      $sql=$conexion->query("Select * from login where id_pelicula=$id_usuario");
    /*$id_us = "Select * from login where id_pelicula=$id_usuario;";
    $id_us_result = mysqli_query($conexion, $id_us);*/
    }
    
?>
<section class="bg-dark">
    <div class="container p-5 text-center">
      <div class="bg-primary p-5">
      <h1 class="text-warning">Reseña de Peliculas</h1>
      <i class="fa fa-star fa-lg"></i>
      <i class="fa fa-star fa-lg"></i>
      <i class="fa fa-star fa-lg"></i>
      <i class="fa fa-star fa-lg"></i>
      <i class="fa fa-star fa-lg"></i>
      <style>
        .fa-star,
        .fa-star-o {
          color: yellow;
        }
      </style>


      <form action="agregar_res.php" method="POST">
      <input type="hidden" name="id_pelicula" value="<?= $_GET["id_pelicula"] ?>">
      <input type="hidden" name="id_usuario" value="<?= $_GET["id_usuario"] ?>">
      <div class="input-group  mt-5 mb-3">
        <div class="form-floating d-sm-flex">
          <h4 class="text-warning mt-2 me-4 ps-4">Nombre:</h4>
          <input type="text" class="form-control" name="titulo_com"/>
        </div>
      </div>

      <div class="input-group  mt-5 mb-3">
        <div class="form-floating d-sm-flex">
          <h4 class="text-warning me-3">Calificacion:</h4>
          <input min="0" max="10" type="number" placeholder="0-10" name="calificacion">
        </div>
      </div>

      <div class="form-floating mt-5">
        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 200px" name="comentario"></textarea>
        <label for="floatingTextarea2">Escribe la reseña de la pelicula...</label>
      </div>
      <button class="btn btn-success btn-lg mt-5" type="submit" name="btn-agregar_res" value ="ok">Agregar</button>
      </form>
    </div>
  </div>
</section>
<?php include('../footer.php'); ?>