<?php
session_start();

if(!isset($_SESSION['usuario'])){
  ?>
<link rel="stylesheet" href="../css/login.css">
<title>Inicio de sesion</title>
<div class="login-page">
  <div class="form">
      <div class="imagen"></div>
    <form class="login-form" action="../includes/validar.php" method="post">
      <input name="usuario" type="text" placeholder="Nombre de usuario"/>
      <input name="clave" type="password" placeholder="Clave de usuario"/>
      <button>login</button>
    </form>
  </div>
</div>
<?php
}
else
{
  header("Location: ../vistas/usuarios/gestionarusuarios.php");
}
?>
