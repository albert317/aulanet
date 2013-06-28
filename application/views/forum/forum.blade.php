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
		<li class="active"><a href="#">Tareas</a></li>
		<li><a href="#">Agenda</a></li>
		<li><a href="#">Asistencia</a></li>
		<li><a href="#">Notas</a></li>
		<li><a href="#">Foro</a></li>
		<li><a href="#">Silabus</a></li>
	</ul>
	
	<div id="tareas">		
		@forelse($topics as $t)	
			<ul class="breadcrumb">
				<li>				
					<h4>
						<a href={{URL::to('forum').'/topic/'.$t->post_id}}>
							{{ $t->title }}
						</a>
					</h4>
					{{ $t->text }}
					<br>Por: 
					@if($t->student_id != null)
						<a href="#">{{ $t->student()->first()->user()->first()->names }}</a>
					@else
						<a href="#">{{ $t->professor()->first()->user()->first()->names }}</a>
					@endif
					<span class="label">
						{{ $t->created_at }}
					</span>	
				</li>
			</ul>
		@empty
		<h4>El foro esta vacio</h4>
		@endforelse

		Nuevo tema:
		{{ Form::open('forum/newtopic', 'POST') }}
		Titulo:{{ Form::text('title') }}
		Contenido:{{ Form::text('text') }}
		Tipo:{{ Form::select('type', array('POST' => 'POST', 'PREGUNTA' => 'PREGUNTA', 'ENLACE' => 'ENLACE'), 'POST') }}
		{{ Form::submit('Crear') }}
		{{ Form::close() }}		
	</div>
	
	
	<!-- Modal Eliminar-->
	<div id="Eliminar" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-body">
			<p>¿Esta seguro de eliminar?</p>
		</div>
		<div class="modal-footer">
			<button class="btn btn-inverse" data-dismiss="modal" aria-hidden="true">Cancelar</button>
			<button class="btn btn-info" >Confirmar</button>
		</div>
	</div>

	
</div>
@endsection





