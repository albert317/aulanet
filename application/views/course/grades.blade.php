@layout('layout.master')
@section('logout')
	<ul class="user nav nav-pills">
        <li class="dropdown">
        	<a class="dropdown-toggle" id="drop4" role="button" data-toggle="dropdown" href="#"><i class="icon-user"></i>{{Auth::user()->names}}<b class="caret"></b></a>
        	<ul id="menu1" class="dropdown-menu" role="menu" aria-labelledby="drop4">
          		<li role="presentation"><a role="menuitem" tabindex="-1" href={{URL::to("login/logout")}}>Salir</a></li>
        	</ul>
      	</li>
    </ul>
@endsection
@section('content')
<div id="contenido">
	<ul class="nav nav-pills">
		<li><a href={{ URL::base().'/cursos/1/tareas' }}>Tareas</a></li>
		<li><a href={{ URL::base().'/agenda'}}>Agenda</a></li>
		<li><a href={{ URL::base().'/cursos/asistencia'}}>Asistencia</a></li>
		<li class="active"><a href={{ URL::base().'/cursos/notas'}}>Notas</a></li>
		<li><a href={{ URL::base().'/cursos/foro'}}>Foro</a></li>
	</ul>
	<div class="notas">
		<h4>Notas del Curso</h4>
		@if(Auth::user()->type=='T')	
		<a class="btn" style="float:right;"onclick="agregarcolumna();" id="btnAgregarColumna">Agregar nota</a>
		@endif
		<br><br>
		<table id="tblTabla" class="table table-bordered">
			<thead>
				<tr>
					<th>Alumnos</th>
				</tr>
			</thead>
			<tbody>
				@if(Auth::user()->type=='T')
				<tr><td>Montes Anccasi Albert Juan</td></tr>
				<tr><td>Muñoz Sagarvinaga Leonidas</td></tr>
				<tr><td>Natividad Alejos Luis Felipe</td></tr>
				<tr><td>Odicio Vilchez Joan Axel</td></tr>
				<tr><td>Rojas Ayala Myleni Beatriz</td></tr>
				<tr><td>Tanaka Terukina Ricardo</td></tr>
				<tr><td>Tarrillo Celada Cesar Augusto</td></tr>
				<tr><td>Velasquez Hinostroza Katherine Luisa</td></tr>
				@else
				<tr><td>{{Auth::user()->last_name1}} {{Auth::user()->last_name2}} {{ Auth::user()->names }}</td></tr>
				@endif
			</tbody>
		</table>
		<br>
		@if(Auth::user()->type=='T')
		<a href="" class="btn btn-info">Guardar Cambios</a>
		@endif
	</div>
</div>
@endsection