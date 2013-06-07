@layout('layout.master')
@section('logout')
	<ul class="user nav nav-pills">
        <li class="dropdown">
        	<a class="dropdown-toggle" id="drop4" role="button" data-toggle="dropdown" href="#"><i class="icon-user"></i>{{$current_user->names}}<b class="caret"></b></a>
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
			<dd>{{$current_user->names}} {{$current_user->last_name1}} {{$current_user->last_name2}}</dd>
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
			    	<th>Hora</th>
			      	<th>Lunes</th>
			      	<th>Martes</th>
			      	<th>Miercoles</th>
			      	<th>Jueves</th>
			      	<th>Viernes</th>
			      	<th>Sábado</th>
			    </tr>
		  	</thead>
		  	<tbody>
			  		@for($i = 0; $i<14; $i++)
			  			<tr>
					  		@for($j=0;$j<7;$j++)
						  		@if($j==0)
									<th>{{$i+8}}:00 - {{$i+9}}:00</th>
						  		@else
									<th></th>
						  		@endif
					  		@endfor
				  		</tr>
			  		@endfor
		  	</tbody>
		</table>
	</div>
@endsection
		

	