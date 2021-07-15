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
    require_once "../../Includes.php/class_materia.php";
    $user_sistema = new Materia();

    $lista = $user_sistema->listar_materias();
    $prueba = $user_sistema->listar_materia_x_id(1);
    ?>
        <div class="container">
        <table class="table table-sm">
            <thead>
                <tr>
                    <th scope="col">Nombre</th>
                </tr>
            </thead>
  
            <tbody>
                <?php
                for ($x = 0; $x < sizeof($lista); $x++) {
                ?>

                    <tr>
                        <td><?php echo $lista[$x]['nombre'] ?></td>
                        <td>
                            <a href="editar_materias.php?idMateria=<?php echo $lista[$x]['id_materia'] ?>">
                                <button class="btn btn-warning">Editar</button>
                            </a>
                            <button onclick="eliminar_materia(<?php echo $lista[$x]['id_materia'] ?>)" class="btn btn-danger">Eliminar</button>
                        </td>
                    </tr>

                <?php
                }

                ?>

</table>
        <a href="crear.php" class="btn btn-primary" style='width:700px;'>Crear</a>
        </tbody>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        function eliminar_materia(id_materia) {
            Swal.fire({
                title: 'Seguro desea eliminar el dato?',
                text: "Esta accion no se puede devolver...",
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Eliminar',
                allowEscapeKey: true
            }).then((result) => {
                if (result.isConfirmed) {
                    location.href ="http://localhost:/Proyecto/Eliminar/eliminar_materia.php?idMateria="+id_materia;
                }
            })
        }
    </script>
<script src="../../Js/jquery.min.3.6.js"></script>
      <script src="../../bootstrap-4.6/js/bootstrap.bundle.min.js"></script>
  </body>
  </html>