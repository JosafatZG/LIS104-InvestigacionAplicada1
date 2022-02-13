<?php
	
	function cargarControlador($controlador){
		
		$nombreControlador = ucwords(strtolower($controlador))."Controller";
		$archivoControlador = 'controllers/'.ucwords(strtolower($controlador)).'.php';
		
		if(!is_file($archivoControlador)){
			
			$archivoControlador= 'controllers/'.CONTROLADOR_PRINCIPAL.'.php';
			
		}
		require_once $archivoControlador;
		$control = new $nombreControlador();
		return $control;
	}
	
	function cargarAccion($controller, $accion, $carnet = null){
		
		if(isset($accion) && method_exists($controller, $accion)){
			if($carnet == null){
				$controller->$accion();
				} else {
				$controller->$accion($carnet);
			}
			} else {
			$controller->ACCION_PRINCIPAL();
		}	
	}
?>