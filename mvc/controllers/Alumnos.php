<?php
	
	class AlumnosController {
		
		public function __construct(){
			require_once "models/AlumnoModel.php";
		}
		
		public function index(){
			
			
			$alumnos = new Alumnos_model();
			$data["titulo"] = "Alumnos";
			$data["alumnos"] = $alumnos->get_alumnos();
			
			require_once "views/alumnos/alumnos.php";	
		}
		
		public function nuevo(){
			
			$data["titulo"] = "Alumnos";
			require_once "views/alumnos/alumnos_nuevo.php";
		}
		
		public function guarda(){
			
            $carnet = $_POST['carnet'];
			$dui = $_POST['dui'];
			$nombre = $_POST['nombre'];
			$apellido = $_POST['apellido'];
			$carrera = $_POST['carrera'];
		
			
			$alumnos = new Alumnos_model();
			$alumnos->insertar($carnet, $dui, $nombre, $apellido, $carrera);
			$data["titulo"] = "Alumnos";
			$this->index();
		}
		
		public function modificar($carnet){
			
			$alumnos = new Alumnos_model();
			
			$data["carnet"] = $carnet;
			$data["alumnos"] = $alumnos->get_alumnos($carnet);
			$data["titulo"] = "Alumnos";
			require_once "views/alumnos/alumnos_modifica.php";
		}
		
		public function actualizar(){

			$carnet = $_POST['carnet'];
			$dui = $_POST['dui'];
			$nombre = $_POST['nombre'];
			$apellido = $_POST['apellido'];
			$carrera = $_POST['carrera'];

			$alumnos = new Alumnos_model();
			$alumnos->modificar($carnet, $dui, $nombre, $apellido, $carrera);
			$data["titulo"] = "Alumnos";
			$this->index();
		}
		
		public function eliminar($carnet){
			
			$alumnos = new Alumnos_model();
			$alumnos->eliminar($carnet);
			$data["titulo"] = "Alumnos";
			$this->index();
		}	
	}
?>