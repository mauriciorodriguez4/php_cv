<?php
if (!empty($_POST["crear_peli"])) {
    if (!empty($_POST["nombre"]) and !empty($_POST["image_uploads"]) and !empty($_POST["genero_id"]) and !empty($_POST["director_id"]) and !empty($_POST["duracion"]) and !empty($_POST["estreno"]) and !empty($_POST["recaudacion"]) and !empty($_POST["sinopsis"])) {        
        $nombre= $_POST["nombre"];
        $poster= $_POST["image_uploads"];
        $genero= $_POST["genero_id"];
        $director= $_POST["director_id"];
        $duracion= $_POST["duracion"];
        $estreno= $_POST["estreno"];
        $recaudacion= $_POST["recaudacion"];
        $sinopsis= $_POST["sinopsis"];
        
        $sql= $conexion->query("insert into peliculas(nombre_pelicula, id_genero, id_director, duracion, estreno, sinopsis, poster, recaudacion) values ('$nombre','$genero','$director','$duracion','$estreno','$sinopsis','$poster','$recaudacion')");
        if ($sql==1) {
            # code...
            echo '<div class="alert alert-success">Pelicula registrada correctamente</div>';
        } else {
            # code...
            echo '<div class="alert alert-danger">Pelicula no registrada</div>';
        }
    } else {
        echo '<div class="alert alert-warning">Faltan campos por rellenar</div>';
    }
    
}
?>