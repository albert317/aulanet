<!doctype html>
<html lang="es">
<head>
	<meta charset="utf-8"/>
	<title>AulaNet</title>
	<meta description=""/>
	<script src={{URL::to('js/jquery-1.10.1.min.js')}}></script>
	<script src={{URL::to('js/jquery-migrate-1.2.1.min.js')}}></script>
	<script src={{URL::to('js/jquery-ui-1.10.3.custom.js')}}></script>
	<link rel="stylesheet" type="text/css" href={{URL::to('css/bootstrap.css')}}>
	<link rel="stylesheet" href={{URL::to('css/style.css')}}>
	<script type="text/javascript" src={{URL::to('js/bootstrap.js')}}></script>
	<script type="text/javascript" src={{URL::to('js/prefixfree.js')}}></script>
	<script src={{URL::to('js/modernizr.js')}}></script>
	<script src={{URL::to('js/metodos.js')}}></script>
	<script src={{URL::to('js/script.js')}}></script>
	<script src={{URL::to('js/tablas.js')}}></script>
	
	<link rel="stylesheet"  type="text/css" media='print' href={{URL::to('css/fullcalendar/fullcalendar.print.css')}}>
	<link rel="stylesheet"  type="text/css" href={{URL::to('css/fullcalendar/fullcalendar.css')}}>
	<script src={{URL::to('js/fullcalendar/fullcalendar.js')}}></script>
</head>
<body>
	
		<header>
			<h1><a href={{ URL::base()}}>AulaNet</a></h1>
			@yield('logout')
		</header>

		<section>
			@yield('content')
		</section>

		<footer>
			2013 Todos los derechos reservados
			<a href="http://sistemas.edu.pe">FISI</a>
		</footer>
	
</body>
</html>