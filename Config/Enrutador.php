<?php

namespace Config;

class Enrutador {
	public static function run(Request $request){
		$controller =  $request->getController()."Controller";
		$ruta = ROOT . "Controllers" . DS  . $controller .  ".php";
		$method = $request->getMethod();
		if($method == "index.php"){
			$method = "index";
		}
		$argument = $request->getArgument();
		if(is_readable($ruta)){
			require_once $ruta;
			$mostrar = "Controllers\\".$controller;
			$controller = new $mostrar;
			if(!isset($argument)){
				$datos = call_user_func(array($controller, $method));
			} else {
				$datos = call_user_func_array(array($controller,$method),$argument);
			}
		}
		//cargar vistas
		$ruta = ROOT . "Views" . DS . $request->getController() . DS  . $request->getMethod() . ".php";
			if(is_readable($ruta)){
				require_once $ruta;
			} else {
				print "no se Encontro la ruta";
			}
		}
}