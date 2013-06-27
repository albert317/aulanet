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
		<li><a href={{ URL::base().'/cursos/'.$group_id.'/asistencia'}}>Asistencia</a></li>
		<li class="active"><a href={{ URL::base().'/cursos/'.$group_id.'/notas'}}>Notas</a></li>
		<li><a href={{ URL::base().'/cursos/'.$group_id.'/foro'}}>Foro</a></li>
		<li><a href={{ URL::base().'/cursos/'.$group_id.'/silabus'}}>Silabus</a></li>
	</ul>
	<h4>{{ $nombre }}</h4>
	<div class="notas">
		<h4>Notas del Curso</h4>
		@if(Auth::user()->type=='T')	
		<a class="btn" style="float:right;" href="#AgregarNotas" data-toggle="modal">Agregar nota</a>
		@endif
		<br><br>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>Alumnos</th>
					@forelse($grades_name as $gn)
					 	<th>
					 		<p>{{$gn['field']}}</p>
					 		<p>{{$gn['weight']}}</p>
					 	</th>
					 	@empty
					 @endforelse
				</tr>
			</thead>
			<tbody>
					<?php 
						//var_dump($students);
						//exit();
					?>
				@if(Auth::user()->type=='T')
				 	@forelse($students as $s)
					 	<tr><td>{{$s['student']->last_name1}} {{$s['student']->last_name2}} {{$s['student']->names }}</td>
						 	@for($j=0;$j<count($grades_name);$j++)
						 	<td>{{$s['grades'][$j]->value}}</td>
						 	@endfor
					 	</tr>
					 	@empty
					 @endforelse
			 	@else
				 	@forelse($students as $s)
				 		@if(Auth::user()->user_id==$s['student']->user_id)
					 	<tr><td>{{$s['student']->last_name1}} {{$s['student']->last_name2}} {{$s['student']->names }}</td>
						 	@for($j=0;$j<count($grades_name);$j++)
						 	<td>{{$s['grades'][$j]->value}}</td>
						 	@endfor
					 	</tr>
					 	@endif
				 	@empty
				 @endforelse>	
			 	@endif

			</tbody>
		</table>
		
		<!-- Modal Agregar Notas-->
		<div id="AgregarNotas" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-header">
			    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			    <h4>Agregar Nota</h4>
			</div>
			<div class="modal-body">	
				{{ Form::open('cursos/'.$group_id.'/notas/actualizar','POST', array('class'=>'form-horizontal')) }}
				<fieldset>
					<div class="modal-header">
					    <div class="control-group">
							<label class="control-label"  for="enunciado">Nombre</label>
							<div class="controls">
								{{ Form::text('nombre', '', array('class'=>'input-medium')) }}
							</div>
							<label class="control-label"  for="enunciado">Peso</label>
							<div class="controls">
								{{ Form::text('peso', '', array('class'=>'input-medium')) }}
							</div>
						</div>
					</div>
					<div class="modal-body">
						<div class="head-relacion">
							<label class="nombres-alumnos">
								<h4>Alumnos</h4>
							</label>
							<div class="notas-alumnos">
								<h4>Notas</h4>
							</div>
						</div>
						<div class="linea"></div>
						@foreach($students as $s)
						<div class="relacion-alumnos">
							<label class="control-label1" for="descripcion">
								{{$s['student']->last_name1}} {{$s['student']->last_name2}} {{$s['student']->names }}
							</label>
							<div class="controls1">
								{{ Form::text($s['student']->student_id,'', array('class'=>'input-mini')) }}
							</div>
						</div>
						<div class="linea"></div>
						@endforeach
					</div>
				</fieldset>
			</div>
			<div class="modal-footer">
				<div class="control-group">
					<div class="controls">
						<button class="btn btn-inverse" data-dismiss="modal" aria-hidden="true">Cancelar</button>
						{{ Form::submit('Guardar', array('class' => 'btn btn-info')) }}
					</div>
				</div>
			</div>
			{{ Form::close() }}
		</div>
	</div>
</div>
@endsection

	
