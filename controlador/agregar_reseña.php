<?php 
include('../modelo/conexion.php');
    

    if (!empty($_POST["comentario"])) {
        if (!empty($_POST["comentario"])) {      
            $id_usuario = $_POST['id_usuario']; 
            $id_pelicula=$_POST['id_pelicula'];
            $comentario = $_POST['comentario'];  
            

            
    
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
        
    }
?>