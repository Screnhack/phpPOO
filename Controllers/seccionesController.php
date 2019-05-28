<?php  

namespace Controllers;

use Models\Seccion as Seccion;

class seccionesController {
	private $seccion;

		public function __construct(){
			$this->seccion = new Seccion();
		}

		public function index(){
			$datos = $this->seccion->listar();
			return $datos;
		}
}


?>