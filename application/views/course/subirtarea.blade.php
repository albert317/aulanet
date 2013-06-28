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
	<h2>{{ $nombre }}</h2>
	<div class="linea"></div>
	<div>
		<div class="tarea-detalle">
			<h4>Detalles de la tarea</h4>
			<dl class="dl-horizontal">
				<dt>Tarea:</dt>
				<dd>{{$assignments->name}}</dd>
				<dt>Descripción:</dt>
				<dd>{{$assignments->description}}</dd>
				<dt>Presentación:</dt>
				<dd>{{$assignments->end_date}}</dd>
				<dt>Material:</dt> 
				@forelse($assignment_file as $file)
					<dd><a href={{$file->url}} >{{$file->title}}</a></dd>
				@empty
					<dd>Aún no hay archivos</dd>
			 	@endforelse
		 	</dl>
		</div>

		<div class="subir-tarea">
			@if(Auth::user()->type == 'S')
				@if($teamfile!=null)
					<h4>Archivos Subidos</h4>
					<dl class="dl-horizontal">
						<dt>Archivo:</dt> 
					@forelse($teamfile as $file)
						<dd><a href={{$file->url}} >{{$file->title}}</a></dd>
					@empty
						<h5>Aún no hay archivos</h5>
				 	@endforelse
			 	</dl>
			 	@endif
				<h4>Enviar Tarea</h4>
				{{ Form::open_for_files('cursos/'.$assignments->classgroup_id.'/tareas/'.$assignment_id.'/upload','POST', array('class'=>'form-horizontal')) }}
					<fieldset>
						<div class="control-group">
							<label class="control-label" for="descripcion">Descripción</label>
							<div class="controls">
								{{ Form::textarea('descripcion','', array('class'=>'input-xlarge','rows'=>'3')) }}
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="fecha">Archivo</label>
							<div class="controls">
								{{ Form::file('file', array('class'=>'input-xlarge','id'=>'file')) }}
							</div>
						</div>
						<div class="control-group">
							<div class="right controls">
								<button class="btn btn-inverse" data-dismiss="modal" aria-hidden="true">Cancelar</button>
								{{ Form::submit('Enviar', array('class' => 'btn btn-info')) }}
							</div>
						</div>
					</fieldset>
				{{ Form::close() }}
			@else
				@if($assignments->type=='S')
					<table class="table table-bordered">
						@foreach($single as $s)
							<tr>
								<td>{{$s['student']->names.' '.$s['student']->last_name1.' '.$s['student']->last_name2}}</td>
								<td>
								@forelse($s['files'] as $sf)
									<p><a href={{$sf->url}}>{{$sf->title}}</a> - {{$sf->created_at}}</p>
								@empty
									<p>No ha subido archivos</p>
								@endforelse
								</td>
							</tr>
						@endforeach
					</table>
					@if($teamfile!=null)
						<h4>Archivos Subidos</h4>
						<dl class="dl-horizontal">
						<dt>Archivo:</dt> 
						@forelse($teamfile as $file)
							<dd><a href={{$file->url}} >{{$file->title}}</a></dd>
						@empty
							<h5>Aún no hay archivos</h5>
					 	@endforelse
			 			</dl>
			 		@endif
				@else
					Grupal
				@endif
			@endif
		</div>
	</div>
</div>
@endsection