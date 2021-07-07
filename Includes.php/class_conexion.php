<?php

class Conexion{
    private $host = "localhost";
    private $user = "root";
    private $pass_pp = "";
    private $db = "proyecto";
    private $conexion;

    function __construct()
    {
        $perro = "mysql:hos=".$this->host.";dbname=".$this->db.";charset=utf8";
        try{
            $this->conexion = new PDO($perro, $this->user, $this->pass_pp);
            echo "Se conecto a la BD :D";
        }catch(Exception $d){
            $this->conexion = "Error al conectarse a la Base de dedatos :( ";
            echo $this->conexion.$d->getMessage();
        }
    }

    function conexion_bd_notas(){
        return $this->conexion;
    }
}
$con = new conexion ();