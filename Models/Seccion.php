<?php

namespace Models;

class Seccion {
	private $id;
    private $name;
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
	public function listar(){
		$sql = "SELECT * FROM secciones";
		$datos = $this->con->consultReturn($sql);
		return $datos;
	}
	public function add(){
        $sql = "INSERT INTO secciones (id, name) VALUES (null, '{$this->name}')";
        $this->con->consultSimple($sql);
	}
	public function delete(){
		$sql = "DELETE  FROM secciones WHERE id = '{$this->id}'";
		$this->con->consultSimple($sql);
	}
	public function edit(){
		$sql = "UPDATE secciones SET nombre = '{$this->name}' WHERE id = '{$this->id}' ";
		$this->con->consultSimple($sql);
	}
	public function view(){
		$sql = "SELECT * FROM secciones WHERE id = '{$this->id}' ";
		$datos = $this->con->consultReturn($sql);
		$row = mysqli_fetch_assoc($datos);
		return $row; 
	}


}