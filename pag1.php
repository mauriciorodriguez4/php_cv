<?php
include "header.php";
session_start();
?>

<nav class="navbar navbar-expand-lg w-100 navbar-light bg-light" id="navDesignLogin">

    <div class="col-8 ps-5">
        <a class="navbar-brand" href="catalog.php">
            <img src="./img/logo.png" style="width: 110px; height: 110px;" alt="">
        </a>
    </div>
    <div class="collapse navbar-collapse col-4" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link h4" href="catalog.php">Mi catalogo</a>
            </li>
            <li class="nav-item">
                <a class="nav-link h4" href="catalog.php">Nosotros</a>
            </li>
            <?php
            if (isset($_SESSION['usuario'])) { ?>
                <li class="nav-item">
                <a class="nav-link h4" href="controlador/logout.php">Salir </a>
            </li>
           <?php } ?>
        </ul>
    </div>
</nav>

<!-- Tarjeta -->
<?php
    include('modelo/conexion.php'); // $conexion
    if( isset($_GET['id']) ) {
        $id_peli = $_GET['id'];

        $query_peli = "select * from peliculas where id_pelicula = '$id_peli '";
        $result_peli = mysqli_query($conexion, $query_peli);
        $peli = mysqli_fetch_array($result_peli);

    }
?>
<div class="row bg-dark" id="pagDesign">
    <div class="col-sm-12 col-lg-4 col-md-12 my-5 ps-5">
        <img class="img-thumbnail rounded float-start" src="img/<?= $peli['poster'] ?>" alt=""
            style="height: 700; height: 700px;">
    </div>


    <div class="col-lg-8 p-5">
        <div id="title">
            <h1 style="color:white"><?= $peli['nombre_pelicula'] ?></h1>
        </div>
        <div class="mt-5">
            <p style="color: white;"><?= $peli['sinopsis'] ?></p>
        </div>


        <div class="my-5">
            <div>
                <p>
                <h4 style="color:white">Calificación</h4>
                </p>
            </div>

            <?php
                $query_resenas = "SELECT * FROM resenas WHERE pelicula_id = '$id_peli' ";
                $result_resenas = mysqli_query($conexion, $query_resenas);
                $num_resenas = mysqli_num_rows($result_resenas);
                $resenas = mysqli_fetch_array($result_resenas);
            ?>

        </div>

        <?php
            if(isset($_SESSION['usuario'])) {   ?>
        <div class="dropdown text-center">
            <a class="" href="vistas/agregar_res.php?id=<?= $resenas['pelicula_id'] ?>">
                <button class="btn btn-primary " type="button">Escribir reseña</button>
            </a>
        </div>

        <?php } ?>
        <table class="table table-hover table-dark">
            <thead>
                <tr>
                    <th>Titulo</th>
                    <th>Nombre</th>
                    <th>Comentario</th>
                    <th>Calificación</th>
                </tr>
            </thead>
            <tbody>
                <?php
            include "./modelo/conexion.php";

            if( isset($_GET['id']) ) {
                $id_peli = $_GET['id'];
        
                $query_res = "SELECT * FROM resenas WHERE pelicula_id = '$id_peli'";
                $result_res = mysqli_query($conexion, $query_res);
                $res = mysqli_fetch_array($result_peli);
            
            }
                

            while($res = mysqli_fetch_array($result_res)) { ?>
                <tr>
                    <td><?= $res['resena_titulo'] ?></td>
                    <td class="text-light"><?= $res['usuario'] ?></td>
                    <td><?= $res['resena_texto'] ?></td>
                    <td class="text-light">
                        <?php  
                            $nota = $res['resena_calificacion'];
                            $nota_faltante = 5 - $nota;

                            for($i = 0; $i < $nota; $i++) { ?>

                            <i class="fa-solid fa-star text-warning" style="color: #ffffff;"></i>

                        <?php } 
                        for($j = 0; $j < $nota_faltante ; $j++) { ?>

                            <i class="fa-regular fa-star" style="color: #fafafa;"></i>

                        <?php }  ?>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <?php
include "footer.php";
?>