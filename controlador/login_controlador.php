<?php 
session_start();

// if (isset($_SESSION['user_email'])) {
//     header('Location: ../index.php');
//     exit;
// }

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Conecta a la base de datos
    $server = 'localhost';
    $usuario = 'root';
    $pass = '';
    $db = 'cine_view';
    $conn = mysqli_connect($server, $usuario, $pass, $db);

    // Obtiene los datos del formulario
    $correo = $_POST['correo'];
    $password = $_POST['contrasena'];

    // Verifica las credenciales de inicio de sesión
    $query = "SELECT * FROM login WHERE correo = '$correo'";
    $result = mysqli_query($conn, $query);
    $usuario = mysqli_fetch_assoc($result);
   
    if ($usuario['contrasena'] == $password) {
      // $_SESSION['user_email'] = $usuario['correo'];
      header('Location: ../admin.php');
    } else {
      echo "Error al iniciar sesion";
    }
   //  if ($usuario && $usuario['contrasena'] == $password) {
   //      // Inicia sesión y redirige al usuario
   //      $_SESSION['user_email'] = $usuario['correo'];
   //    header('Location: ../admin.php');
        
   //  } else {
   //      // Muestra un mensaje de error
   //    header("Location: ../login.php?error=El correo o la contraseña son incorrectas");

   //  }
   }
?>