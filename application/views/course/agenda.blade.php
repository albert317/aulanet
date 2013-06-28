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
		<li class="active"><a href={{ URL::base().'/cursos/'.$group_id.'/agenda'}}>Agenda</a></li>
		<li><a href={{ URL::base().'/cursos/'.$group_id.'/asistencia'}}>Asistencia</a></li>
		<li><a href={{ URL::base().'/cursos/'.$group_id.'/notas'}}>Notas</a></li>
		<li><a href={{ URL::base().'/cursos/'.$group_id.'/foro'}}>Foro</a></li>
		<li><a href={{ URL::base().'/cursos/'.$group_id.'/silabus'}}>Silabus</a></li>
	</ul>

	<script>

	$(document).ready(function(){
		var values = <?php echo json_encode($js_config) ?>;
		var date = new Date();
		var d = date.getDate();
		var m = date.getMonth();
		var y = date.getFullYear();
		
		$('#calendar').fullCalendar({
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month'
			},
			editable: true,
			events: values
		});
	});
	</script>
	<style>
	#calendar {
			width: 800px;
			margin: 0 auto;
			}
	</style>
	<div id='calendar' >

	</div>	
</div>
@endsection
