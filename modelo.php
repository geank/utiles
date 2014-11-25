<?php
class Docente{
	private $id;
	private $grado_academico;
	private $categoria;
	private $escuela;
	private $nombre;
	private $apellidop;
	private $apellidom;
	private $cargo;
	public function __construct(){
	}
	public static function setPropiedades(stdClass $row){
		$instance = new self();
		$instance->llenar($row);
		return $instance;
	}
	protected function llenar(stdClass $row){
		
		$this->id = (isset($row->id)) ? $row->id : null;
		$this->grado_academico = (isset($row->grado_acad)) ? $row->grado_acad : null;
		$this->categoria = (isset($row->categoria)) ? $row->categoria : null;
		$this->escuela = (isset($row->escuela)) ? $row->escuela : null;
		$this->nombre = (isset($row->nombre)) ? $row->nombre : null;
		$this->apellidop = (isset($row->apellidop)) ? $row->apellidop : null;
		$this->apellidom = (isset($row->apellidom)) ? $row->apellidom : null;
		$this->cargo = (isset($row->cargo)) ? $row->cargo : null;
	}
	public function getID(){
		return $this->id;
	}
	public function getNombreCompleto(){
		return $this->nombre.' '.$this->apellidop.' '.$this->apellidom;
	}
}
class Cursos{

}
?>