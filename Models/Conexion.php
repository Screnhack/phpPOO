<?php

namespace Models;

class Conexion {
	private $datos = array(
		'host' => 'localhost',
		'database' => 'colegio' ,
		'user' => 'root',
		'pass' => '1234' 
	);

	private $con;

	public function __construct(){
		$this->con = new \mysqli($this->datos['host'], $this->datos['user'], 
		$this->datos['pass'], $this->datos['database']);
	}
	public function consultSimple($sql){
		$this->con->query($sql);
	}

	public function consultReturn($sql){
		$datos = $this->con->query($sql);
		return $datos;
	}

}