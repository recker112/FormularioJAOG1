<?php 

/**
 * 
 */
class Perro
{
	public $raza;
	public $nombre;

	function __construct($nombre, $raza)
	{
		$this->nombre = $nombre;
		$this->raza = $raza;
	}

	public function changeName($newName) {
		$this->nombre = $newName;
		echo "Cambiaste el nombre del perro a $newName";
	}
}
?>