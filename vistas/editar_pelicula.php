<?php 
include('../header.php'); 
include('../modelo/conexion.php');
    $id=$_GET["id"];
    $pelis_sql = "Select * from peliculas where id_pelicula=$id ;";
    $pelis_result=mysqli_query($conexion, $pelis_sql);

?>

<h1 class="text-center text-primary mt-5">Editar Pelicula</h1>
<hr />
<br>
<div class="container">
    <div>
        <form action="../controlador/editar.php" method="POST">
         <input type="hidden" name="id_pelicula" value="<?= $_GET["id"] ?>">
         <?php
         include ("../controlador/editar.php");
         while ($datoPelicula = mysqli_fetch_array($pelis_result)) { ?>
            <div class="input-group mb-3">
                <span class="input-group-text"><i class="fa-solid fa-video"></i></span>
                <div class="form-floating">
                    <input type="text" class="form-control" id="nombrePeli" placeholder="Nombre de la pelicula" required name="nombre" value="<?= $datoPelicula['nombre_pelicula'] ?>"/>
                    <label for="nombrePeli">Nombre de la pelicula</label>
                </div>
            </div>  
            <div class="input-group">
                <label class="input-group-text" for="selectPoster"><i class="fa-solid fa-image"></i></label>
                <input type="file" class="form-control" aria-describedby="inputGroupFileAddon04" aria-label="Upload"
                    id="image_uploads" accept=".jpg, .jpeg, .png" multiple required name="image_uploads" value="../img/<?= $datoPelicula['poster'] ?>" />
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <div class="input-group my-3">
                        <span class="input-group-text"><i class="fa-solid fa-explosion"></i></span>
                        <div class="form-floating">
                            <select class="form-select" aria-label="Default select example" required name="genero_id">
                                <option value="" selected>
                                    Seleccione un genero
                                </option>
                                <?php 
                               $query_genero = "SELECT * FROM genero;";
                               $result_generos = mysqli_query($conexion, $query_genero);
                               while ($generos = mysqli_fetch_array($result_generos)) {
                            ?>
                                <option value="<?= $generos['id_genero'] ?>"
                                    <?php 
                                        if($generos['id_genero'] == $datoPelicula['id_pelicula']) {
                                            echo "selected";
                                        }
                                    ?>
                                >
                                    <?= $generos['nombre_genero'] ?>
                                </option>
                                <?php } ?>
                            </select>
                            <label>Genero de la pelicula</label>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6">
                    <div class="input-group my-3">
                        <span class="input-group-text"><i class="fa-solid fa-user"></i></span>
                        <div class="form-floating">
                            <select class="form-select" aria-label="Default select example" required name="director_id">
                                <option value="" selected>
                                    Seleccione un director
                                </option>
                                <?php                                
                               $query_directores = "SELECT * FROM director;";
                               $result_directores = mysqli_query($conexion, $query_directores);
                               while ($director = mysqli_fetch_array($result_directores)) {
                            ?>
                                <option value="<?= $director['id_director'] ?>" 
                                    <?php
                                        if($director['id_director'] == $datoPelicula['id_director']) { echo 'selected'; }
                                    ?>
                                >
                                    <?=  $director['nombre_director'] ?>
                                </option>
                                <?php } ?>
                            </select>
                            <label>Director de la pelicula</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-4">
                    <div class="input-group mb-3">
                        <span class="input-group-text">
                            <i class="fa-solid fa-clock"></i></span>
                        <div class="form-floating">
                            <input min="1" max="5" type="number" class="form-control" id="input_duracion"
                                placeholder="Cantidad en minutos" required name="duracion" value="<?= $datoPelicula['duracion'] ?>" />
                            <label for="input_duracion">Duracion (H)</label>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 col-md-4">
                    <div class="input-group mb-3">
                        <span class="input-group-text"><i class="fa-solid fa-calendar-days"></i></span>
                        <div class="form-floating">
                            <input min="1930" max="2023" type="number" class="form-control" id="input_anio"
                                placeholder="Año" required name="estreno" min="1990" max="2023" value="<?= $datoPelicula['estreno'] ?>"/>
                            <label for="input_anio">Año de estreno</label>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="input-group mb-3">
                        <span class="input-group-text">$</span>
                        <div class="form-floating">
                            <input min="0" type="number" class="form-control" id="input_recaudacion"
                                placeholder="Recaudacion en $" required name="recaudacion" value="<?= $datoPelicula['recaudacion'] ?>"/>
                            <label for="input_recaudacion">Recaudacion</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-floating">
                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2"
                    style="height: 100px" required name="sinopsis" value=""><?= $datoPelicula['sinopsis'] ?></textarea>
                <label for="floatingTextarea2">Sinopsis de la pelicula</label>
            </div>
            <?php } ?>
            <div class="d-grid gap-2 mt-3">
                <button class="btn btn-success btn-lg" type="submit" name="editar_peli" value="ok">
                    Editar
                </button>
            </div>
        </form>
    </div>
</div>
</div>
<?php include('../footer.php'); ?>