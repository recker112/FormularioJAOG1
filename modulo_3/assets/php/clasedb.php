<?php
class classDB
{
  private $db;
  
  public function conectar()
  {
    $this->db = new mysqli('localhost', 'root', '', 'programacion') or die 
    ('No conectado');

    return $this->db;
  }
}
?>