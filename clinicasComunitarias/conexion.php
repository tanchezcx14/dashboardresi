<?php
function conectar(){
    $host="localhost";
    $user="root";
    $pass="";
    $bd="clinicaComunitarias";

    $con=mysqli_connect($host,$user,$pass,$bd);
    return $con;
}
?>
