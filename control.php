<?php
require('modelo.php');
class ControlDocente{
	private $result;
	private $storage;
	public function __construct(){
		$this->storage = new SplObjectStorage();
	}
	public function get_docentes(){

		$result = db_query('SELECT id,nombre,apellidop,apellidom FROM docente WHERE 1');
		foreach ($result as $record){
			$docente = Docente::setPropiedades($record);
			$this->storage->attach($docente);
		}
		return $this->storage;
	}
}
class ControlCursos{
	
}
?>