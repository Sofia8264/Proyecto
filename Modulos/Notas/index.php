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
    <?php
    require_once "../../Includes.php/class_notas.php";
    $user_sistema = new Notas();

    $lista = $user_sistema->listar_notas();
    $prueba = $user_sistema->listar_nota_x_id(1);
    ?>
        <div class="container">
        <table class="table table-sm">
            <thead>
                <tr>
                    <th scope="col">Materia</th>
                    <th scope="col">Usuario</th>
                    <th scope="col">Nota</th>
                </tr>
            </thead>
  
            <tbody>
                <?php
                for ($x = 0; $x < sizeof($lista); $x++) {
                ?>

                    <tr>
                        <td><?php echo $lista[$x]['estudiante'] ?></td>
                        <td><?php echo $lista[$x]['nota'] ?></td>
                        <td><?php echo $lista[$x]['nombre_materia'] ?></td>
                        
                    </tr>

                <?php
                }

                ?>


            </tbody>
        </table>
    </div>
<script src="../../Js/jquery.min.3.6.js"></script>
      <script src="../../bootstrap-4.6/js/bootstrap.bundle.min.js"></script>
  </body>
  </html>