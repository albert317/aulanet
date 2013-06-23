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
		<li><a href={{ URL::base().'/cursos/'.$group_id.'/tareas' }}>Tareas</a></li>
		<li><a href={{ URL::base().'/agenda'}}>Agenda</a></li>
		<li class="active"><a href={{ URL::base().'/cursos/'.$group_id.'/asistencia'}}>Asistencia</a></li>
		<li><a href={{ URL::base().'/cursos/'.$group_id.'/notas'}}>Notas</a></li>
		<li><a href={{ URL::base().'/cursos/'.$group_id.'/foro'}}>Foro</a></li>
		<li><a href={{ URL::base().'/cursos/'.$group_id.'/silabus'}}>Silabus</a></li>
	</ul>
	<h4>{{ $course }}</h4>
	<div class="asistencia">
		<h4>Lista de Asistencia</h4>	
		@if(Auth::user()->type=='T')
			<a class="btn" style="float:right;"onclick="agregarcolumna();" id="btnAgregarColumna">Agregar asistencia</a>
		@endif
		<br><br>
		<table id="tblTabla" class="table table-bordered">
			<thead>
				<tr>
					<th>Alumnos</th>
				</tr>
			</thead>
			<tbody>
				@if(Auth::user()->type == 'T')
					@forelse($students as $st)
						<tr><td>
							{{ $st->last_name1 }}
							{{ $st->last_name2 }}
							{{ $st->names }}
						</td></tr>
					@empty
						<h4>No presenta alumnos</h4>
					@endforelse
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