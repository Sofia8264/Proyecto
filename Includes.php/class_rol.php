<?php

require_once "class_conexion.php";
class Rol extends Conexion
    {
        private $rol;
        private $nombre;
        private $conexion;
    
        function __construct()
        {
            $this->conexion = new Conexion();
            $this->conexion = $this->conexion->conexion_tb_usuario();
        }

        function listar_rol()
    {
        $loco_consulta = "SELECT * FROM tb_rol";
        $consulta = $this->conexion->query($loco_consulta);
        $resultado  = $consulta->fetchall(PDO::FETCH_ASSOC);
        return $resultado;
    }

    function listar_rol_x_id($id_rol_bonito)
    {
        $loco_consulta = "SELECT * FROM tb_rol WHERE id_rol = ?";
        $consulta = $this->conexion->prepare($loco_consulta);
        $data_user = array($id_rol_bonito);
        $consulta->execute($data_user);
        $resultado  = $consulta->fetch(PDO::FETCH_ASSOC);
        return $resultado;
    }
    
        function guardar_rol($nombre_form)
    {
            $this->rol = $rol_form;
            $this->nombre = $nombre_form;
    
            $loco_consulta = "INSERT INTO tb_rol (rol, nombre) VALUES (?,?)";
            $insert = $this->conexion->prepare($loco_consulta);
            $array_data_user = array(
                $this->rol,
                $this->nombre,
            );
            $insert->execute($array_data_user);
            return "Registro exitoso";
    }
    
         function actualiza_rol($id_rol, $nombre)
        {
            $this->nombre = $nombre;
            $this->id_rol = $rol;
            

            $query_update = "UPDATE tb_rol SET nombre = ? WHERE id_rol = $id";
            $update = $this->conexion->prepare($query_update);
            $array_update = array(
            $this->id_rol,
            $this->nombre,
            );
            $respuesta = $update->execute($array_update);
            return $respuesta;
        }

    function eliminar_materia($id)
        {
            $query_delete = "DELETE FROM tb_materias WHERE id_materia = ?";
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
