@layout('layout.master')
@section('logout')
	<ul class="user nav nav-pills">
        <li class="dropdown">
        	<a class="dropdown-toggle" id="drop4" role="button" data-toggle="dropdown" href="#"><i class="icon-user"></i>User<b class="caret"></b></a>
        	<ul id="menu1" class="dropdown-menu" role="menu" aria-labelledby="drop4">
          		<li role="presentation"><a role="menuitem" tabindex="-1" href="login/logout">Salir</a></li>
        	</ul>
      	</li>
    </ul>
@endsection
@section('content')
	<div id="contenido">
		<ul class="nav nav-pills">
			<li class="active"><a href="">Tareas</a></li>
			<li><a href="">Agenda</a></li>
			<li><a href="">Asistencia</a></li>
			<li><a href="">Notas</a></li>
			<li><a href="">Foro</a></li>
		</ul>
	</div>
@endsection