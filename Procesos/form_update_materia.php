<?php
require_once "../Includes.php/class_materia.php";
$materia = new Materia();
$update_user = $materia->actualiza_materia(
    $_POST['id_materia'],
    $_POST['nombre_user'],

);
