<article>
	<a href={{URL::to('forum').'/topic/'.$topic->post_id}}>
		{{ $topic->title }}
	</a>
	<br>{{ $topic->created_at }}
	<br>{{ $topic->updated_at }}
	<br>{{ $topic->text }}
	@if($topic->student_id != null)
		<br>{{ $topic->student()->first()->user()->first()->names }}
	@else
		<br>{{ $topic->professor()->first()->user()->first()->names }}
	@endif
	<hr>
</article>
<h4>Respuestas:</h4>
@forelse($answers as $a)
		{{ $a->title }}
	<br>{{ $a->created_at }}
	<br>{{ $a->updated_at }}
	<br>{{ $a->text }}
	@if($a->student_id != null)
		<br>{{ $a->student()->first()->user()->first()->names }}
	@else
		<br>{{ $a->professor()->first()->user()->first()->names }}
	@endif
	<hr>
@empty
	<h4>No hay respuestas</h4>
@endforelse

Nueva respuesta:
{{ Form::open('forum/newanswer', 'POST') }}
	Titulo:{{ Form::text('title') }}
	Contenido:{{ Form::text('text') }}
	{{ Form::button('Responder', array('type'=>'submit', 'name'=>'topic_id', 'value'=>$topic->post_id)) }}
{{ Form::close() }}
