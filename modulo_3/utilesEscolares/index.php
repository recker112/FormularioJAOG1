<?php
extract($_REQUEST);
$data = unserialize($data);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Útiles Escolares</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" />
	<link rel="stylesheet" href="./../assets/css/main.css">

	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

	<script type="text/javascript" src="./../assets/js/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="./../assets/js/main.js"></script>
</head>
<body>
	<header class="header">
		<nav class="header__nav">
	    <div class="nav-wrapper">
	      <span class="brand-logo">Útiles Escolares</span>
	      <a href="#" data-target="mobile-menu" class="sidenav-trigger"><i class="material-icons">menu</i></a>
	      <ul id="nav-mobile" class="right hide-on-med-and-down">
	        <li>
	        	<a class="header__link" href="./controlador.php?operacion=registrar">Registrar utiles</a>
	        </li>
	      </ul>
	    </div>
		</nav>

		<ul class="sidenav" id="mobile-menu">
	    <li><a class="header__link" href="./controlador.php?operacion=registrar">Registrar utiles</a></li>
	  </ul>
	</header>
	<main>
		<div class="container paper">
			<div class="row">
				<?php if (isset($status)) { ?>
				<div class="col s12 statusBox">
					<?php if ($status === 'error') { ?>
						<div class="statusBox__message <?php echo $status; ?>">
							<span>Error al ejecutar la acción</span>
							 <i class="material-icons statusBox__close">close</i>
						</div>
					<?php } else if ($status === "deleted") { ?>
						<div class="statusBox__message success">
							<span>Producto eliminado</span>
							 <i class="material-icons statusBox__close">close</i>
						</div>
					<?php } else if ($status === "not_create") { ?>
						<div class="statusBox__message error">
							<span>Producto no registrado</span>
							 <i class="material-icons statusBox__close">close</i>
						</div>
					<?php } else if ($status === "updated") { ?>
						<div class="statusBox__message success">
							<span>Producto actualizado</span>
							 <i class="material-icons statusBox__close">close</i>
						</div>
					<?php } ?>
				</div>
				<?php } ?>
				<div class="col s12">
					<table class="striped centered">
		        <thead>
		          <tr>
	              <th>Nombre</th>
	              <th>Uso</th>
	              <th>Caracteristicas</th>
	              <th>Nivel</th>
	              <th>Opciones</th>
		          </tr>
		        </thead>

		        <tbody>
		        	<?php if (!$data) {?>
		        	<tr>
		            <td colspan="5">No hay útiles registrados</td>
		          </tr>
		        	<?php } else { 
		        		$i=0;
		        		while($i < count($data)) {
		        			list($id, $nombre, $uso, $Caracteristicas, $nivel) = $data[$i];
		        	?>
				        	<tr>
				            <td><?php echo $nombre ?></td>
				            <td><?php echo $uso ?></td>
				            <td><?php echo $Caracteristicas ?></td>
				            <td><?php echo $nivel ?></td>
				            <td>
				            	<a href="controlador.php?operacion=modificar&id=<?=$id?>" class="waves-effect light-blue darken-3 btn-small">Modificar</a>
				            	<a href="javascript:eliminar(<?=$id?>)" class="waves-effect red darken-1 btn-small">Eliminar</a>
				            </td>
				          </tr>
		        	<?php 
		        				$i++;
		        			}
		        		} 
		        	?>
		        </tbody>
		      </table>
				</div>
			</div>
		</div>
	</main>
</body>
</html>