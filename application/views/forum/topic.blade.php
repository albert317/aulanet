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
<ul class="breadcrumb">
	<li>
		<h4>
		<a href={{URL::to('forum').'/topic/'.$topic->post_id}}>
			{{ $topic->title }}
		</a>
	</h4>
	{{ $topic->text }}
	<br>Por: 	
	@if($topic->student_id != null)
		<a href="#">{{ $topic->student()->first()->user()->first()->names }}</a>
	@else
		<a href="#">{{ $topic->professor()->first()->user()->first()->names }}</a>
	@endif
	<span class="label">
	{{ $topic->created_at }}
</span>
</li>
</ul>
<ul>
@forelse($answers as $a)
<li>
	<h4>
		{{ $a->title }}
	</h4>
	{{ $a->text }}
	<br>Por:
	@if($a->student_id != null)
		<a href="#">{{ $a->student()->first()->user()->first()->names }}</a>
	@else
		<a href="#">{{ $a->professor()->first()->user()->first()->names }}</a>
	@endif
	<span class="label">
		{{ $a->created_at }}
	</span>
	<hr>
<li>
@empty
	<h4>No hay respuestas</h4>
@endforelse	
</ul>




Nueva respuesta:
{{ Form::open('forum/newanswer', 'POST') }}
	Titulo:{{ Form::text('title') }}
	Contenido:{{ Form::text('text') }}
	{{ Form::button('Responder', array('type'=>'submit', 'name'=>'topic_id', 'value'=>$topic->post_id)) }}
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

























