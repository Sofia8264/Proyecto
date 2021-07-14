<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Titlle</title>
    <link href="../bootstrap-4.6/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="../CSS/Estilos.css" rel="stylesheet" type="text/css">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="../Homep.php">
        <img src="../Img/Logo.png" alt="LogoEmpresa" width="70" height="auto">
    </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">            
                <a class="" href="../Homep.php">Inicio</a>         
            </li>
          </ul>
          <ul class="navbar-nav ml-auto">
            </li>
            <li class="btn-group dropleft">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Opciones
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="../Index.php">Cambiar de Usuario</a>
                  <a class="dropdown-item" href="#">Cerrar Sesion</a>
                </div>
              </li>
          </ul>
        </div>
      </nav>

      <div class="row">
  <div class="col">
    <a href="../Modulos/Estudiantes/index.php" class="btn btn-primary" style='width:300px; height:150px'>Estudiantes</a><br></br>
    <a href="../Modulos/Materias/index.php" class="btn btn-primary" style='width:300px; height:150px'>Materias</a><br></br>
    <a href="../Modulos/Notas/index.php" class="btn btn-primary" style='width:300px; height:150px'>Notas</a><br></br>
    <a href="../Modulos/Roles/index.php" class="btn btn-primary" style='width:300px; height:150px'>Roles</a><br></br>  </div>
    </div>
    <script>
        
<?php

session_start();
if(!isset($_SESSION['id'])){
    header("location:login.php");
    die();
}
echo $_SESSION['id'] .'</br>';
echo $_SESSION['id_rol'];

if($_SESSION['id_rol'] == '4' || $_SESSION['id_rol'] == '3'){
    //instrucciones
};
?>
<br>
<br>
<br>
Pagina solo accedida si hay un usuario logueado

:D
<br>
<a href="logout.php">Cerrar sesion</a>
</script>


      <script src="../Js/jquery.min.3.6.js"></script>
      <script src="../bootstrap-4.6/js/bootstrap.bundle.min.js"></script>
  </body>
  </html>