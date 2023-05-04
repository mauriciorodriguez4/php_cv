<?php
include "../modelo/conexion.php"  ;


// if (!empty($_POST["id_pelicula"])) {
//     if (!empty($_POST["nombre"]) and !empty($_POST["image_uploads"]) and !empty($_POST["genero_id"]) and !empty($_POST["director_id"]) and !empty($_POST["duracion"]) and !empty($_POST["estreno"]) and !empty($_POST["recaudacion"]) and !empty($_POST["sinopsis"])) {    
if( isset($_POST['editar_peli']) ) {  
        $id = $_POST['id_pelicula'];  
        $nombre= $_POST["nombre"];
        $poster= $_POST["image_uploads"];
        $genero= $_POST["genero_id"];
        $director= $_POST["director_id"];
        $duracion= $_POST["duracion"];
        $estreno= $_POST["estreno"];
        $recaudacion= $_POST["recaudacion"];
        $sinopsis= $_POST["sinopsis"];
        
        $sql_query = "UPDATE `peliculas` SET `nombre_pelicula`='$nombre',`id_genero`='$genero',`id_director`='$director',`duracion`='$duracion',`estreno`='$estreno',`sinopsis`='$sinopsis', `poster`= '$poster',`recaudacion`= '$recaudacion' WHERE id_pelicula = '$id';";

        mysqli_query($conexion, $sql_query);
        header('Location: ../admin.php');
        
        // if (mysqli) {
        //     # code...
        //     header('Location: ../admin.php');
        // } else {
        //     # code...
        //     echo '<div class="alert alert-danger">Pelicula no Editada</div>';
        // }
    } else {
        echo '<div class="alert alert-warning">Faltan campos por rellenar</div>';
    }
    


// header('Location: ../admin.php');
?>