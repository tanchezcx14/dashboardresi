<?php
    include('../conexion.php');
    $con = conectar();

    $nombreUsuario = $_POST['nombreUsuario'];
    $claveUsuario = $_POST['claveUsuario'];

    $sql = "INSERT INTO usuarios VALUES(DEFAULT,'$nombreUsuario','$claveUsuario')";
    $query = mysqli_query($con,$sql);

    if($query){
        header("Location: ../vistas/mostrarUsuarios.php");
    }
?>
