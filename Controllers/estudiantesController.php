<?php

namespace Controllers;

use Models\Estudiante as Estudiante;
use Models\Seccion as Seccion;

class estudiantesController {
	private $estudiante;
	private $seccion;
	
	public function __construct(){
		$this->estudiante  = new Estudiante();
		$this->seccion  = new Seccion();
	}
	public function index(){
		$datos = $this->estudiante->listar();
		return $datos;
	}
	public function add(){
		if(!$_POST){
			$datos = $this->seccion->listar();
			return $datos;
		} else {
			$permitidos = array (
				"image/jpeg", "image/png", "image.gif","image/jpg"
			);
			$limite = 700;
			if(in_array($_FILES['imagen']['type'], $permitidos) && $_FILES['imagen']['size'] <= $limite*1024 ){
				//print "hola si funciona";
					$nombre = date('is') . $_FILES['imagen']['name'];
					$ruta = "public" .  DS . "images" . DS . "avatars" . DS . $nombre;
					move_uploaded_file($_FILES['imagen']['tmp_name'], $ruta);
					$this->estudiante->set("name", $_POST['nombre']);
					$this->estudiante->set("age", $_POST['edad']);
					$this->estudiante->set("promedio", $_POST['promedio']);
					$this->estudiante->set("imagen", $_POST['$nombre']. "/". $nombre);
					$this->estudiante->set("id_seccion", $_POST['id_seccion']);
					$this->estudiante->add();
					header("Location: " . URL . "estudiantes");
			}
		}	
	}

	public function edit($id){
		//echo "Hola estoy aki";
		if(!$_POST){
				$this->estudiante->set("id", $id);
				$datos = $this->estudiante->view();
				return $datos;
			}else{
				$this->estudiante->set("id", $_POST['id']);
				$this->estudiante->set("name", $_POST['nombre']);
				$this->estudiante->set("age", $_POST['edad']);
				$this->estudiante->set("promedio", $_POST['promedio']);
				$this->estudiante->set("id_seccion", $_POST['id_seccion']);
				$this->estudiante->edit();
				header("Location: " . URL . "estudiantes");
			}
	}

	public function listarSecciones(){
		$datos = $this->seccion->listar();
		return $datos;
	}
}
//creacionde una instancia
$estudiantes = new estudiantesController();
