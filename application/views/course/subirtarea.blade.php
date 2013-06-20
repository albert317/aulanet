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
		<li class="active"><a href={{ URL::base().'/cursos/1/tareas' }}>Tareas</a></li>
		<li><a href={{ URL::base().'/agenda'}}>Agenda</a></li>
		<li><a href={{ URL::base().'/cursos/asistencia'}}>Asistencia</a></li>
		<li><a href={{ URL::base().'/cursos/notas'}}>Notas</a></li>
		<li><a href={{ URL::base().'/cursos/foro'}}>Foro</a></li>
	</ul>
	@if($teamfile!=null)
		<h4>Archivos Subidos</h4>
		<dl class="dl-horizontal">
		@forelse($teamfile as $file)
			<dt>Archivo:</dt> 
			<dd>{{$file->title}}</dd>
		@empty
			<h5>Vacio</h5>
	 	@endforelse
 	</dl>
 	@else
	<h4>Subir tarea</h4>
	<br>
	{{ Form::open_for_files('cursos/'.$assignments->classgroup_id.'/tareas/'.$assignments->assignment_id.'/upload','POST', array('class'=>'form-horizontal')) }}
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
				<div class="controls">
					<button class="btn btn-inverse" data-dismiss="modal" aria-hidden="true">Cancelar</button>
					{{ Form::submit('Enviar', array('class' => 'btn btn-info')) }}
				</div>
			</div>
		</fieldset>
	{{ Form::close() }}
	@endif
</div>
@endsection