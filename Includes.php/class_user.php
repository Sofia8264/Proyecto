<?php

require_once "class_conexion.php";

class Usuario extends Conexion
{
    private $nombre;
    private $apellido;
    private $correo;
    private $pass;
    private $conexion;

    function __construct()
    {
        $this->conexion = new Conexion();
        $this->conexion = $this->conexion->conexion_bd_notas();
    }

    function guardar_usuario($nombre_form, $apellido_form, $correo_form, $pass_form)
    {
        $this->nombre = $nombre_form;
        $this->apellido = $apellido_form;
        $this->correo = $correo_form;
        $this->pass = $pass_form;

        $foca_consulta = "INSERT INTO tb_usuario (nombre, apellido, correo, pass) VALUES (?,?,?,?)";
        $insert = $this->conexion->prepare($foca_consulta);
        $array_data_user = array(
            $this->nombre,
            $this->apellido,
            $this->correo,
            $this->pass,
        );
        $insert->execute($array_data_user);
        return "Registro exitoso";
    }

    function listar_usuarios()
    {
        $perro_consulta = "SELECT * FROM tb_usuario";
        $consulta = $this->conexion->query($perro_consulta);
        $resultado  = $consulta->fetchall(PDO::FETCH_ASSOC);
        return $resultado;
    }

    /**
     * FETCH_ASSOC //devuelve la info como un array asociativo
     * FETCH_NUM //devuelve la info como un array numerico
     * FETCH_OBJ  //devuelve la info como un objeto
     * FETCH_BOTH // devuelve la info con ambos formatos
     */

    function listar_usuario_x_id($id_usuario_bonito)
    {
        $gato_consulta = "SELECT * FROM tb_usuario WHERE id_usuario = ?";
        $consulta = $this->conexion->prepare($gato_consulta);
        $data_user = array($id_usuario_bonito);
        $consulta->execute($data_user);
        $resultado  = $consulta->fetch(PDO::FETCH_ASSOC);
        return $resultado;
    }

    function actualiza_usuario($id, $nombre, $apellido, $correo)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->correo = $correo;

        $query_update = "UPDATE tb_usuario SET nombre = ?, apellido = ?, correo = ? WHERE id_usuario = $id";
        $update = $this->conexion->prepare($query_update);
        $array_update = array(
            $this->nombre,
            $this->apellido,
            $this->correo
        );
        $respuesta = $update->execute($array_update);
        return $respuesta;
    }

    function eliminar_usuario($id)
    {
        $query_delete = "DELETE FROM tb_usuario WHERE id_usuario = ?";
        $delete = $this->conexion->prepare($query_delete);
        $array_delete = array($id);
        $delete->execute($array_delete);
        return "
        <script>
        Swal.fire(               
            'Usuario Eliminado!',
            'El usuario quedo sin registro en su BD.',
            'success'
        )
        </script>
        ";
    }
}