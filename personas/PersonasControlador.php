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
    //Connect DB
    $db = new classDB();
    $conex = $db->conectar();
    
    //Query
    $sql = "SELECT * FROM datos_personales";
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
    header("Location: index.php?filas=".$filas."&campos=".$campos."&data=".serialize($datos));
  }

  //Modificar
  public function modificar()
  {
    extract($_REQUEST);
    $db=new classDB();
    $conex=$db->conectar();

    //Query
    $sql="SELECT * FROM datos_personales WHERE id=".$id_persona;
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

    $sql="SELECT * FROM datos_personales WHERE cedula='$cedula' AND id='$id_persona'";

    $res=mysqli_query($conex,$sql);
    $cant=mysqli_num_rows($res);

    if ($cant>0){
      ?>
      <script type="text/javascript">
        alert("CÉDULA YA REGISTADA");
        window.location="PersonasControlador.php?operacion=index";
      </script>
      <?php
    }else {
       //Query
      $sql="UPDATE datos_personales set 
      nombres='$nombres', 
      apellidos='$apellidos', 
      cedula='$cedula'
      WHERE id=$id_persona";

      //Realizar query
      $res=mysqli_query($conex,$sql);

      if($res){
        ?>
        <script type="text/javascript">
          alert("REGISTRO MODIFICADO");
          window.location="PersonasControlador.php?operacion=index";
        </script>
        <?php
      }else {
        ?>
        <script type="text/javascript">
          alert("ERROR AL MODIFICAR EL REGISTRO");
          window.location="PersonasControlador.php?operacion=index";
        </script>
        <?php
      }
    }
  }

  //Eliminar
  public function eliminar()
  {
    extract($_REQUEST);
    $db=new classDB();
    $conex=$db->conectar();

    $sql="DELETE FROM datos_personales WHERE id='$id_persona'";
    $res=mysqli_query($conex,$sql);

    if($res) {
      ?>
      <script type="text/javascript">
        alert("Registro eliminado");
        window.location="PersonasControlador.php?operacion=index";
      </script>
      <?php
    }else {
      ?>
      <script type="text/javascript">
        alert("Registro no eliminado");
        window.location="PersonasControlador.php?operacion=index";
      </script>
      <?php
    }
  }
}

$controller = new PersonasControlador;
$controller->controlador($operacion);

?>