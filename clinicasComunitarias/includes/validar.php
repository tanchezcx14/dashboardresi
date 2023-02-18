<?php
  include "../conexion.php";
  $conexion= conectar();

  $user=$_POST['usuario'];
  $pass=$_POST['clave'];

  $consulta = "SELECT idUsuario FROM usuarios where nombreUsuario='$user' and claveUsuario='$pass'";
  $resultado=mysqli_query($conexion,$consulta);
  $filas = mysqli_fetch_assoc($resultado);

  if($filas>0)
  {
    session_start();
    $_SESSION['usuario']=$filas[0];
    header("Location: ../vistas/inicio.php");
  }
  else
  {
      include("../vistas/iniciarsesion.php");
      ?>
      <h1 class="bad">ERROR EN LA AUTENTIFICACION</h1>
      <?php
  }
  mysqli_free_result($resultado);
  mysqli_close($conexion);
?>
