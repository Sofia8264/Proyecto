<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link href="../../bootstrap-4.6/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="../../CSS/Estilos.css" rel="stylesheet" type="text/css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="Homep.php">
          <img src="../../Img/Logo.png" alt="LogoEmpresa" width="70" height="auto">
      </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
           </button>
           <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item dropdown">
                <a class="dropdown-item" href="Homep.php">Inicio</a>         
            </li>
          </ul>
            </div>
          
    </nav>
    <div class="container m-3">
        <div class="row justify-content-center m-5">
            <div class="col-sm-8 col-xl-8">
                <div class="card">
    
                    <div class="card-header">
                        <div class="list-group list-group-horizontal" id="list-tab" role="tablist">

                        </div>
                    </div>
    
                    <div class="card-body">
                                <form method="POST" action="../../Procesos/form_registro_materias.php" enctype="multipart/form-data">

                                    <div class="form-group">
                                        <label for="nombre_user">Nombres</label>
                                        <input type="text" class="form-control" id="nombre_user" name="nombre_user">
                                    </div>
                            
                <button type="submit" class="btn btn-primary" id="registro">Crear</button>
            </form>
        </div>  
                            
                        </div>
   

                    </div>
                </div>
            </div>
        </div>

        <script src="../../Js/jquery.min.3.6.js"></script>
      <script src="../../bootstrap-4.6/js/bootstrap.bundle.min.js"></script>
  </body>
  </html>