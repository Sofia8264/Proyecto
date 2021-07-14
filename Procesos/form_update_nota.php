<?php
require_once "../Includes.php/class_user.php";
$usuario = new Notas();
$update_user = $usuario->actualiza_nota(
    $_POST['id_materia'],
    $_POST['id_nota'],
);