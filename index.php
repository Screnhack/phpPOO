<?php

	define('DS', DIRECTORY_SEPARATOR);
	define('ROOT', realpath(dirname(__FILE__)).DS);//contiene la ruta de archivos que 
	define('URL', "http://localhost/Cursos/CursoPhpPlatzi/phpPOO/");
	require_once "Config/Autoload.php";
	Config\Autoload::run();
	require_once "Views/template.php";
	Config\Enrutador::run(new Config\Request());

	/*$exp = new Models\Estudiante();
	$exp->set("id",1);
	$data = $exp->view();
	print $data['name'] . " " . $data['promedio']. " " .  $data['age'];*/
?>