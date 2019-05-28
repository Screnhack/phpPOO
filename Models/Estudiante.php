<?php

namespace Models;

class Estudiante {
    private $id;
    private $name;
    private $age;
    private $promedio;
    private $imagen;
    private $id_seccion;
    private $fecha;
    private $con;


    public function __construct(){
        $this->con = new Conexion();
    }
    public function set($atributo, $contenido){
        $this->$atributo = $contenido;
    }
    public function get($atributo){
        return $this->$atributo;
    }
    public function  hola(){
        echo "hola";
    }
    public function listar(){
        $sql = "SELECT t1.*, t2.name AS nombre_seccion  from estudiantes t1 
        INNER JOIN secciones t2 ON t1.id_seccion = t2.id";
        $datos = $this->con->consultReturn($sql);
        return $datos;
    }
    public function add(){
        $sql = "INSERT INTO estudiantes (id, name, age, promedio, imagen, id_seccion, fecha)
        VALUES (null, '{$this->name}','{$this->age}', '{$this->promedio}','{$this->imagen}','{$this->idSeccion}',NOW())";
        $this->con->consultSimple($sql);
    }
    public function delete(){
        $sql = "DELETE FROM estudiantes WHERE id = '{$this->id}'";
        $this->con->consultSimple($sql);
    }
    public function edit(){
        $sql = "UPDATE estudiantes SET name = '{$this->name}', age = '{$this->age}', promedio = '{$this->promedio}' , id_seccion = '{$this->idSeccion}' WHERE id = '{$this->id}'";
        $this->con->consultSimple($sql);
    }
    public function view(){
        $sql = "SELECT t1.*, t2.name AS nombre_seccion  from estudiantes t1 
        INNER JOIN secciones t2 ON t1.id_seccion = t2.id WHERE t1.id = '{$this->id}'";
        $datos = $this->con->consultReturn($sql);
        $row = mysqli_fetch_assoc($datos);
        return $row;
    }
}