<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>AulaNet</title>
	<script src="http://code.jquery.com/jquery-1.10.0.min.js"></script>
	<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/style.css">
	<script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" scr="js/metodos.js"></script> 
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
			  	<li><a href="#">Foro</a></li>
			  	<li><a href="#">Agenda</a></li>
			  	<li class="active"><a href="#" onClick="cargar_tarea();">Tareas</a></li>
			  	<li><a href="#">Notas</a></li>
			  	<li><a href="#">Asistencia</a></li>
			</ul>
		</div>
		<div id="foro">
			
		</div>
		<div id="agenda">
			
		</div>
		<!--
		<script>
			function cargar(){
				$('#tareas').load("prueba");
			}
		</script>
		-->
		<div id="tareas">
			aqui saldra
		</div>
		<div id="notas">
			
		</div>
		<div id="asistencia">
			
		</div>
	</section>

	<footer>
		2013 Todos los derechos reservados
		<a href="http://sistemas.edu.pe">FISI</a>
	</footer>
	
</body>
</html>