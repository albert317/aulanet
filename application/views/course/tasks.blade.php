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
		<div id="tareas">
			<ul>
				
					<li class="tarea">
						<a href="javascript:NuevaTarea();">
							<h4>Crear Nueva Tarea</h4>
							<img class="imgnewtask"src={{URL::to('img/newtask.png')}} alt="">
						</a>
					</li>
				
				@for($i=0; $i<6; $i++)
					<li class="tarea">
						<a href="#"><h4>Tarea {{$i+1}}</h4></a>
						<div class="detalle">
							Mauris mauris ante, blandit et, ultrices a, susceros. Nam mi. Proin viverra leo ut odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.
						</div>
						<div class="edicion">
							<a href="edit"><img src={{URL::to('img/edit.png')}} alt=""></a>
							<a href="delete"><img src={{URL::to('img/delete.png')}} alt=""></a>
						</div>
					</li>
				@endfor
			</ul>
		</div>
		<div id="newtask">
			{{ Form::open_for_files('','POST', array('class'=>'form-horizontal')) }}
			<form class="form-horizontal" action='' method="POST">
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
							<button onclick="CancelarCrearTarea();" class="btn btn-inverse">Cancelar</button>
							{{ Form::submit('Crear', array('class' => 'btn btn-info')) }}
						</div>
					</div>
				</fieldset>
			</form>
			{{ Form::close() }}
		</div>
	</div>
@endsection
