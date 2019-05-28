<?php

namespace Views;

	$template = new Template(); 
	class Template {
		public function __construct(){
?>
	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Administracion</title>
		<link rel="stylesheet" href="<?php echo URL?>public/plugins/bootstrap/bootstrap.min.css">
	</head>
	<body>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		  <a class="navbar-brand" href="<?php echo URL; ?>">Administracion de Estudiantes</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav mr-auto">
		      <li class="nav-item active">
		        <a class="nav-link" href="<?php echo URL; ?>">Inicio<span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item dropdown">
		        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          Estudiantes
		        </a>
		        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
		          <a class="dropdown-item" href="<?php echo URL?>/estudiantes">Listado</a>
		          <a class="dropdown-item" href="<?php echo URL?>estudiantes/add">Agregar</a>
		        </div>
		      </li>
		       <li class="nav-item dropdown">
		        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		          Secciones
		        </a>
		        	<ul class="dropdown-menu" role="menu">
		            <li><a class="dropdown-item" href="<?php echo URL; ?>secciones">Listado</a></li>
		            <li><a class="dropdown-item" href="<?php echo URL; ?>secciones/agregar">Agregar</a></li>
		          </ul>
		      </li>
		    </ul>
		  </div>
		</nav>
<?php
			}
			public function __destruct(){
?>
	<script src="<?php echo URL?>public/plugins/jquery/jquery-3.2.1.slim.min.js"></script>
	<script src="<?php echo URL?>public/plugins/jquery/popper.min.js"></script>
	<script src="<?php echo URL?>public/plugins/bootstrap/bootstrap.min.js"></script>
	</body>
	</html>
<?php			
		}
	}
?>