<?php
extract($_REQUEST);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registrar</title>
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
	        	<a class="header__link" href="./controlador.php?operacion=index">Regresar</a>
	        </li>
	      </ul>
	    </div>
		</nav>

		<ul class="sidenav" id="mobile-menu">
	    <li><a class="header__link" href="./controlador.php?operacion=index">Regresar</a></li>
	  </ul>
	</header>
	<main>
		<div class="container paper">
			<div class="row">
				<form class="col s12" action="enviar_formulario.php">
					<div class="row">
						<div class="col s12">
							<span class="paper__title">Registrar Útiles Escolares</span>
						</div>
						<?php if (isset($status)) { ?>
						<div class="col s12 statusBox">
							<?php if ($status === 'error') { ?>
								<div class="statusBox__message <?php echo $status; ?>">
									<span>Error al registrar los datos</span>
									 <i class="material-icons statusBox__close">close</i>
								</div>
							<?php } else { ?>
								<div class="statusBox__message <?php echo $status; ?>">
									<span>Producto registrado</span>
									 <i class="material-icons statusBox__close">close</i>
								</div>
							<?php } ?>
						</div>
						<?php } ?>
		        <div class="input-field col s5 offset-s1">
		          <input id="nombre" name="nombre" type="text">
		          <label for="nombre">Nombre</label>
		        </div>
		        <div class="input-field col s5">
		          <input id="uso" name="uso" type="text">
		          <label for="uso">Uso</label>
		        </div>
		      </div>
		      <div class="row">
		        <div class="input-field col s10 offset-s1">
		          <textarea id="caracteristicas" name="caracteristicas" class="materialize-textarea"></textarea>
		          <label for="caracteristicas">Caracteristicas</label>
		        </div>
		      </div>
		      <div class="input-field col s10 offset-s1">
				    <select name="nivel" id="nivel">
				      <option value="profesional">Profesional</option>
							<option value="no profesional">No profecional</option>
							<option value="ambos">Ambos</option>
				    </select>
				    <label>Nivel</label>
				  </div>
				  <div class="col s1 offset-s5">
				  	<button class="btn waves-effect deep-orange" type="submit" name="submit">
					    Registrar
					  </button>
				  </div>
				  <div class="col s12 info">
				  	<span class="info__register">Útiles Registrados: <?php echo $registrados ?></span>
				  </div>
				</form>
			</div>
			<div>
				
			</div>
		</div>
	</main>
</body>
</html>