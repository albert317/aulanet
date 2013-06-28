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
	
	<h4>AGENDA GLOBAL</h4>
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
