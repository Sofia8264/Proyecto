<?php
require_once "../Includes.php/class_rol.php";
$rol = new Rol();
$update_user = $rol->actualiza_rol(
    $_POST['nombre'],
    $_POST['id_rol'],

);
