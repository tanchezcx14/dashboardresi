<?php
  include('../conexion.php');
  $con=conectar();

  $idUsuario=$_POST['idUsuario'];
  $nombreUsuario=$_POST['nombreUsuario'];
  $claveUsuario=$_POST['claveUsuario'];


$sql="UPDATE usuarios SET nombreUsuario='$nombreUsuario', claveUsuario='$claveUsuario' WHERE idUsuario = '$idUsuario'";
$query=mysqli_query($con,$sql);
    if($query){
        Header("Location: ../vistas/mostrarUsuarios.php");
    }
?>
