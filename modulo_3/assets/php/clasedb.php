<?php
class classDB
{
  private $db;
  
  public function conectar()
  {
    $this->db = new mysqli('localhost', 'root', '', 'utiles_escolares') or die 
    ('No conectado');

    return $this->db;
  }
}
?>