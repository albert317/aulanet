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
		<a href="#nuevarespuesta" class="btn">Responder</a>
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

@forelse($answers as $a)
<ul class="breadcrumb">
<li>
	<h5>
		{{ $a->title }}
	</h5>
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
	<!--<a href="#" class="btn"><i class="icon-thumbs-up"></i></a>-->
	@if(Auth::user()->type == 'T')
		<form method="post" action={{ "http://aulanet.dev/forum/vote/".$a->post_id }}>
			<input type="submit" name="vote" value="yes">
		</form>
		<form method="post" action={{ "http://aulanet.dev/forum/vote/".$a->post_id }}>
			<input type="submit" name="vote" value="no">
		</form>
	@endif
<li>
	</ul>
@empty
	<h4>No hay respuestas</h4>
@endforelse	






<a name="nuevarespuesta">Nueva respuesta:</a>
		{{ Form::open('forum/newanswer', 'POST', array('class'=>'form-horizontal')) }}
		<div class="control-group">
			{{ Form::label('titulo','Titulo', array('class'=>'control-label')) }}
			<div class="controls">
				{{ Form::text('title') }}
			</div>
		</div>
		<div class="control-group">
			{{ Form::label('contenido','Contenido', array('class'=>'control-label')) }}
			<div class="controls">
				<textarea rows="5" name="text"></textarea>
			</div>
		</div>
		<div class="control-group">
			<div class="controls">
			{{ Form::button('Responder', array('class'=>'btn', 'type'=>'submit', 'value'=>$topic->post_id, 'name'=>'topic_id')) }}
			</div>
		</div>		
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

























