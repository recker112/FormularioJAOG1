<?php 
//Includes
include('../assets/php/clasedb.php');

//Extract request
extract($_REQUEST);

//Class
class PersonasControlador
{
  //Controller Routes
  static function controlador($operacion)
  {
    $persona = new PersonasControlador;

    switch ($operacion) {
      case 'index':
        $persona->index();
        break;
      case 'registrar':
        $persona->registrar();
        break;
      case 'guardar':
        $persona->guardar();
        break;
      case 'modificar':
        $persona->modificar();
        break;
      case 'actualizar':
        $persona->actualizar();
        break;
      case 'eliminar':
          $persona->eliminar();
          break;
      default:
        ?>
        <script type="text/javascript">
          alert("No existe la ruta");
          windows.location = "PersonasControlador.php?operacion=index";
        </script>
        <?php
        break;
    }
  }

  //Index Route
  public function index()
  {
    //Extraer
    extract($_REQUEST);
    //Connect DB
    $db = new classDB();
    $conex = $db->conectar();
    
    //Query
    $sql = "SELECT * FROM utiles_escolares";
    //Execute querry
    $res = mysqli_query($conex, $sql);
    //Count $campos
    $campos = mysqli_num_fields($res);
    //Count $filas
    $filas = mysqli_num_rows($res);
    //Inicialize $data
    $data=array();
    $i=0;

    while($data=mysqli_fetch_array($res)){
      for ($o=0; $o < $campos; $o++) { 
        $datos[$i][$o] = $data[$o];
      }
      $i++;
    }

    mysqli_close($conex);
    if ($status) {
      header("Location: index.php?filas=".$filas."&campos=".$campos."&data=".serialize($datos)."&status=$status");
    }else {
      header("Location: index.php?filas=".$filas."&campos=".$campos."&data=".serialize($datos));
    }
  }

  //Registrar Route
  public function registrar()
  {
    //Extraer
    extract($_REQUEST);
    //Connect DB
    $db = new classDB();
    $conex = $db->conectar();
    
    //Query
    $sql = "SELECT * FROM utiles_escolares";
    //Execute querry
    $res = mysqli_query($conex, $sql);
    //Count $campos
    $campos = mysqli_num_fields($res);
    //Count $filas
    $filas = mysqli_num_rows($res);
    //Inicialize $data
    $data=array();
    $i=0;

    while($data=mysqli_fetch_array($res)){
      for ($o=0; $o < $campos; $o++) { 
        $datos[$i][$o] = $data[$o];
      }
      $i++;
    }

    mysqli_close($conex);
    if ($status) {
      header("Location: formulario.php?registrados=".count($datos)."&status=$status");
    }else {
      header("Location: formulario.php?registrados=".count($datos));
    }
  }

  //Modificar
  public function modificar()
  {
    extract($_REQUEST);
    $db=new classDB();
    $conex=$db->conectar();

    //Query
    $sql="SELECT * FROM utiles_escolares WHERE id=".$id;
    //Realizar query
    $res=mysqli_query($conex,$sql);
    //Obtener datos
    $data=mysqli_fetch_array($res);

    header("Location: editar.php?data=".serialize($data));
  }

  //Actualizar
  public function actualizar()
  {
    extract($_REQUEST);
    $db=new classDB();
    $conex=$db->conectar();

    $sql="SELECT * FROM utiles_escolares WHERE id='$id'";

    $res=mysqli_query($conex,$sql);
    $cant=mysqli_num_rows($res);

    if ($cant===0){
      header("Location: controlador.php?operacion=index&status=not_create");
    }else {
       //Query
      $sql="UPDATE utiles_escolares set 
      nombre='$nombre', 
      uso='$uso', 
      caracteristicas='$caracteristicas',
      nivel='$nivel'
      WHERE id=$id";

      //Realizar query
      $res=mysqli_query($conex,$sql);

      if($res){
        header("Location: controlador.php?operacion=index&status=updated");
      }else {
        header("Location: controlador.php?operacion=index&status=error");
      }
    }
  }

  //Eliminar
  public function eliminar()
  {
    extract($_REQUEST);
    $db=new classDB();
    $conex=$db->conectar();

    $sql="DELETE FROM utiles_escolares WHERE id='$id'";
    $res=mysqli_query($conex,$sql);

    if($res) {
      header("Location: controlador.php?operacion=index&status=deleted");
    }else {
      header("Location: controlador.php?operacion=index&status=error");
    }
  }
}

$controller = new PersonasControlador;
$controller->controlador($operacion);
?>