<!doctype html>
<html lang="es">

<head>
    <title>Login sistema</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="row d-flex justify-content-center align-items-center" style="margin: 10% 20%">
            <div class="col-12 shadow-lg p-3 mb-5 bg-white rounded">
                <h1 class="text-center">INGRESO</h1>
                <form action="login.php" method="POST" class="m-4">
                    <div class="form-group">
                        <label for="correo_user">Correo</label>
                        <input type="email" class="form-control" name="correo_user" id="correo_user">
                    </div>
                    <div class="form-group">
                        <label for="pass_user">Contraseña</label>
                        <input type="password" class="form-control" name="pass_user" id="pass_user">
                    </div>
                    <span>
                        <?php
                        //manera 1
                        // if(isset($_GET['e'])){
                        //     echo $_GET['e'];
                        // }

                        //manera 2
                        echo (isset($_GET['e'])) ? $_GET['e'] : "";
                        
                        ?>
                    </span>
                    <button type="submit" class="btn btn-primary btn-block">Ingresar</button>
                </form>
            </div>
        </div>
    </div>

    <?php
    if($_POST){
        session_start();
        require_once "Includes.php/class_conexion.php";
        $conex = new Conexion();
        $conex_login = $conex->conexion_tb_suario();
        $conex_login->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $usuario_form = $_POST['correo_user'];
        $pass_user = $_POST['pass_user'];


        $sql = "SELECT * FROM tb_geeral WHERE correo = :usuario AND pass = :pass";
        $query = $conex_login->prepare($sql);
        $query->bindParam(':usuario', $usuario_form);
        $query->bindParam(':pass', $pass_user );
        $query->execute();

        $usurio_data = $query->fetch(PDO::FETCH_ASSOC);

        if( $usurio_data){
            $_SESSION['id'] = $usurio_data['id_usuario'];
            $_SESSION['id_rol'] =  $usurio_data['id_rol'];
            header("location: Administrador/home.php");
        }else{
            $error_login = "Usuario y/o contraseña invalida";
            header("location: login.php?e=".$error_login );
        }

    }
    
    ?>
             

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>