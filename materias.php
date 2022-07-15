<?php

class Materias{
	private $db;
	
	public function __construct($base){
		$this->db = $base; 
	}
	
	public function __destruct() {
		$this->db = null;
	}
	
	public function insertar_materia($codigo, $nombre, $comision, $anio){
		$this->db->enviarQuery("INSERT INTO materias VALUES ('$codigo', '$nombre', '$comision', '$anio')");
	}
	
	public function eliminar_materia($DNI){
		$respuesta = $this->db->enviarQuery("DELETE FROM materias WHERE codigo=$codigo");
		if (!$respuesta){
			echo $this->db->error;
			return false; 
		
		 }else {
			 return $respuesta;
		 }
	}	

	public function get_materias(){
		$respuesta = $this->db->enviarQuery("SELECT * FROM materias");
		if (!$respuesta){
			echo $this->db->error;
			return false; 
		
		 }else {
			 return $respuesta;
		 
}
	}
}
?>