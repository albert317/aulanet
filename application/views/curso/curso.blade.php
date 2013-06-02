<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>AulaNet</title>
	<script src="http://code.jquery.com/jquery-1.10.0.min.js"></script>
	<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/style.css">
	<script type="text/javascript" src="js/script.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
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
		<div class="menu">
			<ul class="nav nav-pills">
			  	<li class="active"><a href="javascript:cargar_foro();">Foro</a></li>
			  	<li><a href="javascript:cargar_agenda();">Agenda</a></li>
			  	<li><a href="javascript:cargar_tareas();">Tareas</a></li>
			  	<li><a href="javascript:cargar_notas();">Notas</a></li>
			  	<li><a href="javascript:cargar_asistencia();">Asistencia</a></li>
			</ul>
		</div>
		<div id="foro">
			foro
		</div>
		<div id="agenda">
			agenda
		</div>
		<div id="tareas">
			tareas
		</div>
		<div id="notas">
			notas
		</div>
		<div id="asistencia">
			asistencia
		</div>
	</section>

	<footer>
		2013 Todos los derechos reservados
		<a href="http://sistemas.edu.pe">FISI</a>
	</footer>
	
</body>
</html>