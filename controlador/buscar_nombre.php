<?php

include "../modelo/conexion.php";

if (!empty($_POST["buscar_nombre"])) {
    if (!empty($_POST["nombre"]) ) {
        $nombre= $_POST["nombre_pelicula"];
        
        $sql_query="SELECT p.poster, p.nombre_pelicula, g.nombre_genero FROM peliculas p JOIN genero g ON p.id_genero=g.id_genero WHERE nombre_pelicula LIKE '%$nombre%';";
        $result_pelis = mysqli_query($conexion, $query_pelis);

 

    } else {
    }
    
}
?>