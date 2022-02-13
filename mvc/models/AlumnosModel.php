<?php

class Alumnos_model {
		
    private $db;
    private $alumnos;
    
    public function __construct(){
        $this->db = Conectar::conexion();
        $this->alumnos = array();
    }

    public function get_alumnos()
		{
			$sql = "SELECT * FROM alumnos";
			$resultado = $this->db->query($sql);
			while($row = $resultado->fetch_assoc())
			{
				$this->alumnos[] = $row;
			}
			return $this->alumnos;
		}

        public function insertar($carnet, $dui, $nombre, $apellido, $carrera){
			
			$resultado = $this->db->query("INSERT INTO alumnos (carnet, dui, nombre, apellido, carrera) VALUES ('$carnet', '$dui', '$nombre', '$apellido', '$carrera')");
			
		}
		
		public function modificar($carnet, $dui, $nombre, $apellido, $carrera){
			
			$resultado = $this->db->query("UPDATE alumnos SET dui='$dui', nombre='$nombre', apellido='$apellido', carrera='$carrera' WHERE carnet = '$carnet'");			
		}
		
		public function eliminar($carnet){

			$resultado = $this->db->query("DELETE FROM alumnos WHERE carnet = '$carnet'");
			
		}
		
		public function get_alumno($carnet)
		{
			$sql = "SELECT * FROM alumnos WHERE carnet='$carnet' LIMIT 1";
			$resultado = $this->db->query($sql);
			$row = $resultado->fetch_assoc();

			return $row;
		}
	} 
?>