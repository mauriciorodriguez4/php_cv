<?php


   //  if(!empty($_POST["btnRegistrar"])){
   //      if (!empty($_POST["nombres"]) and !empty($_POST["apellidos"]) and !empty($_POST["usuario"]) and !empty($_POST["correo"]) and !empty($_POST["contraseña"])) {
            // $nombres= $_POST["nombres"];
            // $apellidos=$_POST["apellidos"];
            // $usuario=$_POST["usuario"];
            // $correo= $_POST["correo"];
            // $contraseña= $_POST["contraseña"];

   //          // $sql=$conexion->query("INSERT INTO `login`( `nombres`, `apellidos`, `usuario`, `correo`, `contraseña`) VALUES ('[value-2]','[value-3]','[value-4]','[value-5]','[value-6]')");

   //          // if ($sql == 1) {
   //          //     echo '<div class="alert alert-success">Usuario registrado</div>';
   //          // }else{
   //          //     echo '<div class="alert alert-danger">Usuario no registrado</div>';
   //          // }
            

   //          // header("Location: ../register.php");
            
   //      }
   //  }else{
   //      echo '<div class="alert alert-warning">Faltan campos por rellenar</div>';
   //  }

      //include ('./modelo/conexion.php');
      
      // include '../modelo/conexion.php';
      $conexion = mysqli_connect("localhost","root","","cine_view");

      print_r($_POST);
      echo $_POST["nombres"];

      if($_POST['btnRegistrar']) {

         $nombres = $_POST["nombres"];
         $apellidos =$_POST["apellidos"];
         $usuario = $_POST["usuario"];
         $correo = $_POST["correo"];
         $contrasena = $_POST["contrasena"];

      
         $sql = "INSERT INTO login(nombres, apellidos, usuario, correo, contrasena) VALUES('$nombres', '$apellidos', '$usuario', '$correo', '$contrasena')";

            $result = mysqli_query($conexion, $sql);

            if (!$result) {
               die("error");
            } else {
               echo "se pudo";
            }
      }
?>