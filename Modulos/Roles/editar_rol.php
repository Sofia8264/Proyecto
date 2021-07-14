<?php
require_once "../../Includes.php/class_rol.php";
$rol = new Rol();

$data_user = $rol->listar_rol_x_id($_GET['idRol']);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link href="../../CSS/Estilos.css" rel="stylesheet" type="text/css">
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="../../Homep.php">
        <img src="../../Img/Logo.png" alt="LogoEmpresa" width="70" height="auto">
    </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">            
                <a class="" href="../../Homep.php">Inicio</a>         
            </li>
          </ul>
          <ul class="navbar-nav ml-auto">
            </li>
            <li class="btn-group dropleft">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Opciones
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="../../Index.php">Cambiar de Usuario</a>
                  <a class="dropdown-item" href="#">Cerrar Sesion</a>
                </div>
              </li>
          </ul>
        </div>
      </nav>


    <div class="container">
        <form method="POST" action="../../Procesos/form_update_rol.php">
            <div class="form-group">
                <label for="nombre_user">Rol</label>
                <input type="text" class="form-control" id="rol_user" name="rol_user" value="<?php echo $data_user['id_rol'] ?>">
            </div>
            <div class="form-group">
                <label for="nombre_user">Nombres</label>
                <input type="text" class="form-control" id="rol_user" name="rol_user" value="<?php echo $data_user['nombre'] ?>">
            </div>
            <input type="hidden" name="id_rol" value="<?php echo $_GET['idRol'] ?>">
            <button type="submit" class="btn btn-primary">Actualizar datos</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>