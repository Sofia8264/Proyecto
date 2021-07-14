<?php
// print_r($_POST);exit;
require_once "../Includes.php/class_user.php";
$user_sistema = new Usuario();
$respuesta = $user_sistema->guardar_usuario(
    $_POST['nombre_user'], 
    $_POST['apell_user'],
    $_POST['correo_user'],
    $_POST['pass_user']
);
echo $respuesta;
