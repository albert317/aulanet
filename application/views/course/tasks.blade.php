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
		<li class="active"><a href={{ URL::base().'/cursos/'.$group_id.'/tareas' }}>Tareas</a></li>
		<li><a href={{ URL::base().'/cursos/'.$group_id.'/agenda'}}>Agenda</a></li>
		<li><a href={{ URL::base().'/cursos/'.$group_id.'/asistencia'}}>Asistencia</a></li>
		<li><a href={{ URL::base().'/cursos/'.$group_id.'/notas'}}>Notas</a></li>
		<li><a href={{ URL::base().'/cursos/'.$group_id.'/foro'}}>Foro</a></li>
		<li><a href={{ URL::base().'/cursos/'.$group_id.'/silabus'}}>Silabus</a></li>
	</ul>
	<h4>{{ $nombre }}</h4>
	<div id="tareas">
		<ul>
			@if(Auth::user()->type == 'T')
				<li class="tarea">
					<a href="javascript:NuevaTarea();">
						<h4>Crear Nueva Tarea</h4>
						<img class="imgnewtask"src={{URL::to('img/newtask.png')}} alt="">
					</a>
				</li>
			@endif
			

			@forelse($assignments as $a)
				<li class="tarea">
					<a href={{ URL::base().'/cursos/'.$a->classgroup_id.'/tareas/'.$a->assignment_id }}><h4>{{ $a->name }}</h4></a>
					<div class="detalle">
						{{ $a->description }}
					</div>
					<div class="edicion">
						<span>{{ $a->end_date }}</span>
						@if(Auth::user()->type == 'T')
							<!-- Modal Editar-->
							<div id="{{'Editar'.$a->assignment_id}}" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-header">
								    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
								    <h4>Editar Tarea</h4>
								</div>
								<div class="modal-body">	
									{{ Form::open_for_files('cursos/'.$group_id.'/tareas/'.$a->assignment_id.'/editar','POST', array('class'=>'form-horizontal')) }}
									<fieldset>
										<div class="control-group">
											<label class="control-label"  for="enunciado">Enunciado</label>
											<div class="controls">
												{{ Form::text('enunciado', $a->name, array('class'=>'input-xlarge')) }}
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="descripcion">Descripción</label>
											<div class="controls">
												{{ Form::textarea('descripcion',$a->description, array('class'=>'input-xlarge','rows'=>'3')) }}
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="fecha">Fecha de presentación</label>
											<div class="controls">
												{{ Form::text('fecha',$a->date, array('class'=>'input-xlarge')) }}
											</div>
										</div>				
										
										<div class="control-group">
											<label class="control-label" for="fecha">Archivos</label>
											<div class="controls">
												@forelse($assignmentfile[$a->assignment_id] as $file)
													<dd><a href={{$file->url}} >{{$file->title}}</a></dd>
												@empty
													<dd>Aún no hay archivos</dd>
											 	@endforelse
											</div>
										</div>
										<div class="control-group">
											<label class="control-label" for="fecha">Archivo</label>
											<div class="controls">
												{{ Form::file('file', array('class'=>'input-xlarge','id'=>'file')) }}
											</div>
										</div>
										<div class="control-group">
											<div class="controls">
												<button class="btn btn-inverse" data-dismiss="modal" aria-hidden="true">Cancelar</button>
												{{ Form::submit('Guardar', array('class' => 'btn btn-info')) }}
											</div>
										</div>
									</fieldset>
									{{ Form::close() }}
								</div>
							</div>
							
						<!-- Modal Eliminar-->
							<div id="{{'Eliminar'.$a->assignment_id}}" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-body">
									<p>¿Esta seguro de eliminar?</p>
								</div>
								<div class="modal-footer">
									<button class="btn btn-inverse" data-dismiss="modal" aria-hidden="true">Cancelar</button>
									<a href={{ URL::base().'/cursos/'.$a->classgroup_id.'/tareas/'.$a->assignment_id.'/delete' }} >
									<button class="btn btn-info" >Confirmar</button></a>
								</div>
							</div>
							<a href="{{'#Editar'.$a->assignment_id}}" data-toggle="modal"><img src={{URL::to('img/edit.png')}} alt=""></a>
							<a href="{{'#Eliminar'.$a->assignment_id}}" data-toggle="modal" id={{ $a->assignment_id }}><img src={{URL::to('img/delete.png')}} alt=""></a>
						@endif
					</div>
				</li>
			@empty
				<h4>No hay tareas por ahora =)</h4>
			@endforelse
		</ul>
	</div>
	
	
	
	@if(Auth::user()->type == 'T')
	<!-- Nueva tarea-->
	<div id="newtask">
		{{ Form::open_for_files('cursos/'.$assignments[0]->classgroup_id.'/tareas/creartarea','POST', array('class'=>'form-horizontal')) }}
		<fieldset>
			<div id="legend">
				<legend class="">Nueva Tarea</legend>
			</div>
			<div class="control-group">
				<label class="control-label"  for="enunciado">Enunciado</label>
				<div class="controls">
					{{ Form::text('enunciado','', array('class'=>'input-xlarge')) }}
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="descripcion">Descripción</label>
				<div class="controls">
					{{ Form::textarea('descripcion','', array('class'=>'input-xlarge','rows'=>'3')) }}
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="fecha">Fecha de presentación</label>
				<div class="controls">
					{{ Form::date('fecha','', array('class'=>'input-xlarge')) }}
				</div>
			</div>
			<div class="control-group">
				<label class="control-label"  for="password_confirm">Tipo de tarea</label>
				<div class="controls">
					<label class="radio">
						{{ Form::radio('tipo','grupal', array('class'=>'input-xlarge')) }}
						Grupal
					</label>
					<label class="radio">
						{{ Form::radio('tipo','individual', array('class'=>'input-xlarge')) }}
						Individual
					</label>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="fecha">Archivo</label>
				<div class="controls">
					{{ Form::file('file', array('class'=>'input-xlarge')) }}
				</div>
			</div>
			<div class="control-group">
				<div class="controls">
					<a href="javascript:CancelarCrearTarea();" class="btn btn-inverse">Cancelar</a>
					{{ Form::submit('Crear', array('class' => 'btn btn-info')) }}
				</div>
			</div>
		</fieldset>
		{{ Form::close() }}
	</div>
	@endif
</div>
@endsection
