<?php
   if ( isset($_GET['id']) ) {
      include('../modelo/conexion.php'); // $conexion
      $id_peli = $_GET['id'];

      $query = "DELETE FROM peliculas WHERE id_pelicula = '$id_peli';";

      echo $query;

      $result = mysqli_query($conexion, $query);

      if(!$result) {
         die("Ocurrio un error al intentar eliminar."/);
      }
   }
   header('Location: ../admin.php');
?>