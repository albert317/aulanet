@forelse($topics as $t)	
	<article>
		<a href={{URL::to('forum').'/topic/'.$t->post_id}}>
			{{ $t->title }}
		</a>
		<br>{{ $t->created_at }}
		<br>{{ $t->updated_at }}
		<br>{{ $t->text }}
		@if($t->student_id != null)
			<br>{{ $t->student()->first()->user()->first()->names }}
		@else
			<br>{{ $t->professor()->first()->user()->first()->names }}
		@endif
		<hr>
	</article>
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
