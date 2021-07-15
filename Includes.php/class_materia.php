<?php

require_once "class_conexion.php";
class Materia extends Conexion
    {
        private $nota;
        private $estudiante;
        private $nombre_materia;
        private $conexion;
    
        function __construct()
        {
            $this->conexion = new Conexion();
            $this->conexion = $this->conexion->conexion_tb_usuario();
        }

        function listar_materias()
    {
        $gato_consulta = "SELECT * FROM tb_materias";
        $consulta = $this->conexion->query($gato_consulta);
        $resultado  = $consulta->fetchall(PDO::FETCH_ASSOC);
        return $resultado;
    }

    function listar_materia_x_id($id_materia_bonita)
    {
        $gato_consulta = "SELECT * FROM tb_materias WHERE id_materia = ?";
        $consulta = $this->conexion->prepare($gato_consulta);
        $data_user = array($id_materia_bonita);
        $consulta->execute($data_user);
        $resultado  = $consulta->fetch(PDO::FETCH_ASSOC);
        return $resultado;
    }
    
        function guardar_materia($nombre_form)
    {
            $this->nombre = $nombre_form;
    
            $gato_consulta = "INSERT INTO tb_materias (nombre) VALUES (?)";
            $insert = $this->conexion->prepare($gato_consulta);
            $array_data_user = array(
                $this->nombre,
            );
            $insert->execute($array_data_user);
            return "Registro exitoso";
    }
    
         function actualiza_materia($id, $nombre)
        {
            $this->nombre = $nombre;

            $query_update = "UPDATE tb_materias SET nombre = ? WHERE id_materia = $id";
            $update = $this->conexion->prepare($query_update);
            $array_update = array(
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
                'Materia Eliminada! :)',
                'El usuario quedo sin registro en su BD.',
                'success'
            )
        
            setTimeout('redireccion()', 2000);
        
            function redireccion(){
                window.location = 'https://localhost/Proyecto/Modulos/Materias/index.php';
            }
            </script>
            ";
        }
        }