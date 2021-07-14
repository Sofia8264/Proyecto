<?php

require_once "class_conexion.php";

class Notas extends Conexion
{
    private $materia;
    private $usuario;
    private $nota;
    private $conexion;

    function __construct()
    {
        $this->conexion = new Conexion();
        $this->conexion = $this->conexion->conexion_tb_usuario();
    }

    function listar_nota_x_id($id_nota_bonita)
    {
        $sapo_consulta = "SELECT * FROM tb_notas WHERE id_estudiante = ?";
        $consulta = $this->conexion->prepare($sapo_consulta);
        $data_user = array($id_nota_bonita);
        $consulta->execute($data_user);
        $resultado  = $consulta->fetch(PDO::FETCH_ASSOC);
        return $resultado;
    }

    function listar_notas()
    {
        $sapo_consulta = "
        SELECT N.nota, N.fec_registro, M.nombre nombre_materia, CONCAT(U.nombre,' ', U.apellido) estudiante FROM tb_notas N
            INNER JOIN tb_materias M ON N.id_materia = M.id_materia
            INNER JOIN tb_usuario U ON N.id_estudiante = U.id_usuario
        ";
        $consulta = $this->conexion->query($sapo_consulta);
        $resultado  = $consulta->fetchall(PDO::FETCH_ASSOC);
        return $resultado;
    }

    function guardar_nota($materia_form, $nota_form)
    {
            $this->materia = $materia_form;
            $this->nota = $nota_form;
    
            $sapo_consulta = "INSERT INTO tb_notas (materia, usuario, nota) VALUES (?, ?)";
            $insert = $this->conexion->prepare($sapo_consulta);
            $array_data_user = array(
                $this->materia,
                $this->usuario,
                $this->nota,
            );
            $insert->execute($array_data_user);
            return "Registro exitoso";
    }
    
         function actualiza_nota($materia, $usuario, $nota)
        {
            $this->materia = $materia;
            $this->usuario = $usuario;
            $this->nota = $nota;

            $query_update = "UPDATE tb_notas SET nombre = ? WHERE id_estudiante = $id";
            $update = $this->conexion->prepare($query_update);
            $array_update = array(
            $this->materia,
            $this->usuario,
            $this->nota,
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
