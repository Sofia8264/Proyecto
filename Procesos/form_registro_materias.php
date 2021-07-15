<?php
require_once "../Includes.php/class_materia.php";
$general = new Materia();
$respuesta = $general->guardar_materia(
    $_POST['nombre_user'],
);
echo $respuesta;
