<?php 

/**
 * 
 */
class Atleta
{
	public $nombre;
	public $edad;
	private $pasosTotales = 0;
	private $diasSinDeporte = 0;

	function __construct($nombre, $edad)
	{
		$this->nombre = $nombre;
		$this->edad = $edad;
	}

	public function addPaso()
	{
		$this->pasosTotales += 47;
	}

	public function addDiaSin()
	{
		$this->diasSinDeporte += 1;
	}

	public function showStats()
	{
		$atleta = $this->nombre;
		$pasos = $this->pasosTotales;
		$dias = $this->diasSinDeporte;
		echo "Estadísticas del atleta $atleta <br/>";
		echo "Pasos dado: $pasos <br/>";
		echo "Días sin hacer deporte: $dias";
	}
}

$atleta = new Atleta("Luis", 12);

$random = rand(1,100);
for ($i=0; $i < $random; $i++) { 
	$atleta->addPaso();
}

$random = rand(1,30);
for ($i=0; $i < $random; $i++) { 
	$atleta->addDiaSin();
}
$atleta->showStats();
?>