<?php
class UtilesEscolares
{
	public $nombre;
	public $uso;
	public $caracteristicas;
	public $nivel;

	function __construct($nombre, $uso, $caracteristicas, $nivel)
	{
		$this->nombre = $nombre;
		$this->uso = $uso;
		$this->caracteristicas = $caracteristicas;
		$this->nivel = $nivel;
	}

	public function ShowInfo()
	{
		echo "Nombre: ". $this->nombre. "<br/>";
		echo "Uso: ". $this->uso. "<br/>";
		echo "Caracteristicas". $this->caracteristicas. "<br/>";
		echo "Nivel: ". $this->nivel. "<br/>";
		echo "Función ejecutada";
	}
}

class Tijeras extends UtilesEscolares
{
	public $size;
	public $marca;
	public $precio;
	function __construct($size, $marca, $precio)
	{
		$this->size = $size;
		$this->marca = $marca;
		$this->precio = $precio;
	}
}
?>