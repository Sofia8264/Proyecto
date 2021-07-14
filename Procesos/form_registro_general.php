<?php
require_once "../Includes.php/class_index.php";
$general = new Index();
$respuesta = $general->guardar_general(
    $_POST['nombre_user'], 
    $_POST['apell_user'],
    $_POST['correo_user'],
    $_POST['pass_user'],
);
echo $respuesta;
