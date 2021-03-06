<?php
	
	require_once "config/config.php";
	require_once "core/routes.php";
	require_once "config/database.php";
	require_once "controllers/Alumnos.php";
	
	if(isset($_GET['c'])){ //Verifica si existe el nombre del controlador
		
		$controlador = cargarControlador($_GET['c']); //Carga el controlador Alumnos
		
		if(isset($_GET['a'])){ //Verifica si existe la acción
			if(isset($_GET['carnet'])){ //Verifica si existe carnet
				cargarAccion($controlador, $_GET['a'], $_GET['carnet']); //Ejecuta acción que necesita el carnet
				} else {
				cargarAccion($controlador, $_GET['a']); //Ejecuta acción
			}
			} else {
			cargarAccion($controlador, ACCION_PRINCIPAL); //Cargar form predeterminado, alumnos.php
		}
		
		} else {
		
		$controlador = cargarControlador(CONTROLADOR_PRINCIPAL);
		$accionTmp = ACCION_PRINCIPAL;
		$controlador->$accionTmp();
	}
?>