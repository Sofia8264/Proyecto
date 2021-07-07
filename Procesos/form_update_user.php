<?php
require_once "../includes/class_user.php";
$usuario = new Usuario();
$update_user = $usuario->actualiza_usuario(
    $_POST['id_user'],
    $_POST['nombre_user'],
    $_POST['apell_user'],
    $_POST['correo_user'],
);
