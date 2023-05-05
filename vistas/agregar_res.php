<?php include('../header.php');

    include('../modelo/conexion.php'); //$conexion
    // include ("../controlador/agregar_reseña.php");
    if(isset($_GET['id'])) {
      $id_pelicula = $_GET["id"];
    }
    
    if( isset($_POST["btn-agregar_res"]) ){
      print_r($_POST);
      $id = $_POST['id_pelicula'];
      $titulo = $_POST['titulo_com'];
      $calificacion = $_POST['calificacion'];
      $comentario = $_POST['comentario'];

      $query = "INSERT INTO resenas (usuario, resena_titulo, resena_texto, resena_calificacion, pelicula_id) 
                VALUES('@usuario', '$titulo', '$comentario', '$calificacion', '$id');";

      $result_insert = mysqli_query($conexion, $query);

      header("Location: ../pag1.php?id=$id");
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
          <div class="input-group  mt-5 mb-3">
            <div class="form-floating d-sm-flex">
              <h4 class="text-warning mt-2 me-4 ps-4">Nombre:</h4>
              <input type="text" class="form-control" name="titulo_com"/>
              <input type="hidden" name="id_pelicula" value="<?= $id_pelicula ?>">
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