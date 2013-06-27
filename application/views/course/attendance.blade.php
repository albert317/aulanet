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
		<li><a href={{ URL::base().'/cursos/'.$group_id.'/agenda'}}>Agenda</a></li>
		<li class="active"><a href={{ URL::base().'/cursos/'.$group_id.'/asistencia'}}>Asistencia</a></li>
		<li><a href={{ URL::base().'/cursos/'.$group_id.'/notas'}}>Notas</a></li>
		<li><a href={{ URL::base().'/cursos/'.$group_id.'/foro'}}>Foro</a></li>
		<li><a href={{ URL::base().'/cursos/'.$group_id.'/silabus'}}>Silabus</a></li>
	</ul>
	<h4>{{ $nombre }}</h4>
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
				<tr><td>Apellidos y nombres</td>
				@forelse($attendances_dates as $ad)
					<td>{{ $ad}}</td>
				@empty
				@endforelse
					 	</tr>
				@if(Auth::user()->type=='T')
				 	@forelse($students as $s)
					 	<tr><td>{{$s['student']->last_name1}} {{$s['student']->last_name2}} {{$s['student']->names }}</td>
						 	@for($j=0;$j<count($attendances_dates);$j++)
						 	<td>{{$s['attendances'][$j]->type}}</td>
						 	@endfor
					 	</tr>
					 	@empty
					 @endforelse

			 	@else
				 	@forelse($students as $s)
				 		@if(Auth::user()->user_id==$s['student']->user_id)
					 	<tr><td>{{$s['student']->last_name1}} {{$s['student']->last_name2}} {{$s['student']->names }}</td>
						 	@for($j=0;$j<count($attendances_dates);$j++)
						 	<td>{{$s['attendances'][$j]->type}}</td>
						 	@endfor
					 	</tr>
					 	@endif
				 	@empty
				 @endforelse>
					 	
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