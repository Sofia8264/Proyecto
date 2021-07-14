<?php

require_once "class_conexion.php";

class Index extends Conexion
{
    private $nombre;
    private $apellido;
    private $email;
    private $pass;
    private $conexion;

    function __construct()
    {
        $this->conexion = new Conexion();
        $this->conexion = $this->conexion->conexion_tb_usuario();
    }

    function guardar_general($nombre_form, $apellido_form, $correo_form, $pass_form)
    {
        $this->nombre = $nombre_form;
        $this->apellido = $apellido_form;
        $this->correo = $correo_form;
        $this->pass = $pass_form;

        $iguana_consulta = "INSERT INTO tb_general (Nombres, Apellidos, Correo, Pass) VALUES (?,?,?,?)";
        $insert = $this->conexion->prepare($iguana_consulta);
        $array_data_user = array(
            $this->nombre,
            $this->apellido,
            $this->correo,
            $this->pass,
        );
        $insert->execute($array_data_user);
        return "Registro exitoso";
    }


    function listar_general_x_id($id_general_bonito)
    {
        $iguana_consulta = "SELECT * FROM tb_general WHERE id_general = ?";
        $consulta = $this->conexion->prepare($iguana_consulta);
        $data_user = array($id_general_bonito);
        $consulta->execute($data_user);
        $resultado  = $consulta->fetch(PDO::FETCH_ASSOC);
        return $resultado;
    }
}