<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>AulaNet</title>

	<script src="css/jquery-ui-1.10.3.custom.css"></script>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script src="js/jquery-1.10.1.min.js"></script>
	<script src="js/jquery-migrate-1.2.1.min.js"></script>
	<script src="js/jquery-ui-1.10.3.custom.js"></script>
	<script type="text/javascript" src="js/script.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<link rel="stylesheet" href="css/style.css">
	
</head>
<body>
	<header>
		<h1>AulaNet</h1>
		<ul class="user nav nav-pills">
			<li class="dropdown">
				<a class="dropdown-toggle" id="drop4" role="button" data-toggle="dropdown" href="#"><i class="icon-user"></i>Usuario <b class="caret"></b></a>
				<ul id="menu1" class="dropdown-menu" role="menu" aria-labelledby="drop4">
					<li role="presentation"><a role="menuitem" tabindex="-1" href="#">Salir</a></li>
				</ul>
			</li>
		</ul>
	</header>

	<section>
		<div id="contenido">
			<ul class="nav nav-pills">
				<li class="active"><a href="">Tareas</a></li>
				<li><a href="">Agenda</a></li>
				<li><a href="">Asistencia</a></li>
				<li><a href="">Notas</a></li>
				<li><a href="">Foro</a></li>
			</ul>
			<div id="tareas">
				<ul>
					<li class="tarea">
						<a href="javascript:NuevaTarea();">
							<h4>Crear Nueva Tarea</h4>
							<img class="imgnewtask"src="img/newtask.png" alt="">
						</a>
					</li>
					<li class="tarea">
						<a href="#"><h4>Tarea 1</h4></a>
						<div class="detalle">
							Mauris mauris ante, blandit et, ultrices a, susceros. Nam mi. Proin viverra leo ut odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.
						</div>
						<div class="edicion">
							<a href="edit"><img src="img/edit.png" alt=""></a>
							<a href="delete"><img src="img/delete.png" alt=""></a>
						</div>
					</li>
					<li class="tarea">
						<a href="#"><h4>Tarea 2</h4></a>
						<div class="detalle">
							Mauris mauris ante, blandit et, ultrices a, susceros. Nam mi. Proin viverra leo ut odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.
						</div>
						<div class="edicion">
							<a href="edit"><img src="img/edit.png" alt=""></a>
							<a href="delete"><img src="img/delete.png" alt=""></a>
						</div>
					</li>
					<li class="tarea">
						<a href="#"><h4>Tarea 3</h4></a>
						<div class="detalle">
							Mauris mauris ante, blandit et, ultrices a, susceros. Nam mi. Proin viverra leo ut odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.
						</div>
						<div class="edicion">
							<a href="edit"><img src="img/edit.png" alt=""></a>
							<a href="delete"><img src="img/delete.png" alt=""></a>
						</div>
					</li>
					<li class="tarea">
						<a href="#"><h4>Tarea 4</h4></a>
						<div class="detalle">
							Mauris mauris ante, blandit et, ultrices a, susceros. Nam mi. Proin viverra leo ut odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.
						</div>
						<div class="edicion">
							<a href="edit"><img src="img/edit.png" alt=""></a>
							<a href="delete"><img src="img/delete.png" alt=""></a>
						</div>
					</li>
					<li class="tarea">
						<a href="#"><h4>Tarea 5</h4></a>
						<div class="detalle">
							Mauris mauris ante, blandit et, ultrices a, susceros. Nam mi. Proin viverra leo ut odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.
						</div>
						<div class="edicion">
							<a href="edit"><img src="img/edit.png" alt=""></a>
							<a href="delete"><img src="img/delete.png" alt=""></a>
						</div>
					</li>
				</ul>
			</div>
			<div id="newtask">
				<form class="form-horizontal" action='' method="POST">
					<fieldset>
						<div id="legend">
							<legend class="">Nueva Tarea</legend>
						</div>
						<div class="control-group">
							<!-- Username -->
							<label class="control-label"  for="enunciado">Enunciado</label>
							<div class="controls">
								<input type="text" id="enunciado" name="enunciado" placeholder="" class="input-xlarge">
							</div>
						</div>

						<div class="control-group">
							<!-- E-mail -->
							<label class="control-label" for="descripcion">Descripción</label>
							<div class="controls">
								<textarea rows="3" class="input-xlarge"></textarea>
							</div>
						</div>

						<div class="control-group">
							<!-- Password-->
							<label class="control-label" for="fecha">Fecha de presentación</label>
							<div class="controls">
								<input type="date" id="fecha" name="fecha" placeholder="" class="input-xlarge">
							</div>
						</div>

						<div class="control-group">
							<!-- Password -->
							<label class="control-label"  for="password_confirm">Tipo de tarea</label>
							<div class="controls">
								<label class="radio">
								  	<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
								  	Individual
								</label>
								<label class="radio">
								  	<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
								  	Grupal
								</label>
							</div>
						</div>

						<div class="control-group">
							<!-- Password-->
							<label class="control-label" for="fecha">Archivo</label>
							<div class="controls">
								<input type="file" id="file" name="file" placeholder="" class="input-xlarge">
							</div>
						</div>

						<div class="control-group">
							<!-- Button -->
							<div class="controls">
								<button onclick="CancelarCrearTarea();" class="btn btn-inverse">Cancelar</button>
								<button class="btn btn-info">Crear</button>
							</div>
						</div>
					</fieldset>
				</form>
			</div>
		</div>
	</section>

	<footer>
		2013 Todos los derechos reservados
		<a href="http://sistemas.edu.pe">FISI</a>
	</footer>
	
</body>
</html>