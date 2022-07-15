<?php
class Docente{
private $db;  



public function __construct($base){
$this->db = $base;
}


public function insertar_docente($dnidocente, $nombre, $apellido, $telefono, $tipo_usuario){
   $this->db->enviarQuery("INSERT INTO docente VALUES ('$dnidocente','$nombre','$apellido','$telefono','$tipo_usuario')");
    }

    public function get_comentarios($dnialumno, $nombre){
		$comentarios = $this->db->enviarQuery("SELECT * FROM alumno");
	
    }


public function getAlumno(){
    $respuesta = $this->db->enviarQuery("SELECT * FROM alumnos");
    if (!$respuesta){
        echo $this->db->error;
        return false; 
    
     }else {
         return $respuesta;
     }
}
public function getAlumnos($id){
    $respuesta = $this->db->enviarQuery("SELECT * FROM alumnos");
    if (!$respuesta){
        echo $this->db->error;
        return false; 
    
     }else {
         return $respuesta;
     }
}
public function eliminarAlumno($id){
    $respuesta = $this->db->enviarQuery("DELETE FROM alumnos");
    if (!$respuesta){
        echo $this->db->error;
        return false; 
    
     }else {
         return $respuesta;
     }
}


}


?>