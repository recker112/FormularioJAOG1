<?php 

/**
 * 
 */
class Edificio
{
	public $nombre;
	public $fechaConstruccion;

	function __construct($nombre, $fechaConstruccion)
	{
		$this->nombre = $nombre;
		$this->fechaConstruccion = $fechaConstruccion;
	}

	protected function ShowInfo()
	{
		foreach ($this as $key) {
			echo $key."<br/>";
		}
	}

	public function getInfo()
	{
		$this->ShowInfo();
	}
}

$edi = new Edificio("Enrrique pitier", 12);
$edi->getInfo();
?>