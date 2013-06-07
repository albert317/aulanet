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
	<div class="datos-personales">
		<h4>Datos Personales</h4>
		<dl class="dl-horizontal">
			<dt>Alumno(a) :</dt>
			<dd>José Perez Chacón</dd>
			<dt>Facultad :</dt>
			<dd>Ingeniería de Sistemas e Informática</dd>
			<dt>Escuela :</dt>
			<dd>EAP Ingeniería de Software</dd>
		</dl>
	</div>
	<div class="enlaces">
		<h4>Enlaces de interés</h4>
		<ul class="links">
			<li class="link"><a href="#"><i class="icon-tag"></i> Fisi</a></li>
			<li class="link"><a href="#"><i class="icon-tag"></i> UNMSM</a></li>
			<li class="link"><a href="#"><i class="icon-tag"></i> Tercio Estudiantil</a></li>
			<li class="link"><a href="#"><i class="icon-tag"></i> Economia</a></li>
			<li class="link"><a href="#"><i class="icon-tag"></i> Bienestar</a></li>
			<li class="link"><a href="#"><i class="icon-tag"></i> Unidad de Matricula</a></li>
		</ul>
	</div>
	<div class="cursos">
		<h4>Cursos Matriculados</h4>
		@for ($i = 0; $i<6; $i++)
			<a href="curso.html"><article class="curso">curso {{$i + 1}}</article></a>
		@endfor
	</div>
	<button class="btn btn-info" id="mostrar_horario">Mostrar Horario</button>
	<button class="btn btn-info" id="ocultar_horario">Ocultar Horario</button>
	<div id="horario">
		<table class="table table-bordered">
			<caption><h3>Horario</h3></caption>
		  	<thead>
			    <tr>
			      <th>Lunes</th>
			      <th>Martes</th>
			      <th>Miercoles</th>
			      <th>Jueves</th>
			      <th>Viernes</th>
			      <th>Sábado</th>
			    </tr>
		  	</thead>
		  	<tbody>
			    <tr>
			    	<th></th>
			    	<th></th>
			    	<th></th>
			    	<th></th>
			    	<th></th>
			    	<th></th>
			    </tr>
			    <tr>
			    	<th></th>
			    	<th></th>
			    	<th></th>
			    	<th></th>
			    	<th></th>
			    	<th></th>
			    </tr>
			    <tr>
			    	<th></th>
			    	<th></th>
			    	<th></th>
			    	<th></th>
			    	<th></th>
			    	<th></th>
			    </tr>
			    <tr>
			    	<th></th>
			    	<th></th>
			    	<th></th>
			    	<th></th>
			    	<th></th>
			    	<th></th>
			    </tr>
			    <tr>
			    	<th></th>
			    	<th></th>
			    	<th></th>
			    	<th></th>
			    	<th></th>
			    	<th></th>
			    </tr>
			    <tr>
			    	<th></th>
			    	<th></th>
			    	<th></th>
			    	<th></th>
			    	<th></th>
			    	<th></th>
			    </tr>
			    <tr>
			    	<th></th>
			    	<th></th>
			    	<th></th>
			    	<th></th>
			    	<th></th>
			    	<th></th>
			    </tr>
			    <tr>
			    	<th></th>
			    	<th></th>
			    	<th></th>
			    	<th></th>
			    	<th></th>
			    	<th></th>
			    </tr>
			    <tr>
			    	<th></th>
			    	<th></th>
			    	<th></th>
			    	<th></th>
			    	<th></th>
			    	<th></th>
			    </tr>
			    <tr>
			    	<th></th>
			    	<th></th>
			    	<th></th>
			    	<th></th>
			    	<th></th>
			    	<th></th>
			    </tr>
			    <tr>
			    	<th></th>
			    	<th></th>
			    	<th></th>
			    	<th></th>
			    	<th></th>
			    	<th></th>
			    </tr>
			    <tr>
			    	<th></th>
			    	<th></th>
			    	<th></th>
			    	<th></th>
			    	<th></th>
			    	<th></th>
			    </tr>
			    <tr>
			    	<th></th>
			    	<th></th>
			    	<th></th>
			    	<th></th>
			    	<th></th>
			    	<th></th>
			    </tr>
			    <tr>
			    	<th></th>
			    	<th></th>
			    	<th></th>
			    	<th></th>
			    	<th></th>
			    	<th></th>
			    </tr>
			    <tr>
			    	<th></th>
			    	<th></th>
			    	<th></th>
			    	<th></th>
			    	<th></th>
			    	<th></th>
			    </tr>
		  	</tbody>
		</table>
	</div>
@endsection
		

	