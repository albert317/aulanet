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
		<li><a href="">Tareas</a></li>
		<li><a href="">Agenda</a></li>
		<li class="active"><a href="">Asistencia</a></li>
		<li><a href="">Notas</a></li>
		<li><a href="">Foro</a></li>
	</ul>
	<div class="asistencia">
		<h4>Lista de Asistencia</h4>	
		<a class="btn" style="float:right;"onclick="agregarcolumna();" id="btnAgregarColumna">Agregar asistencia</a>
		<br><br>
		<table id="tblTabla" class="table table-bordered">
			<thead>
				<tr>
					<th>Alumnos</th>
				</tr>
			</thead>
			<tbody>
				<tr><td>Montes Anccasi Albert Juan</td></tr>
				<tr><td>Muñoz Sagarvinaga Leonidas</td></tr>
				<tr><td>Natividad Alejos Luis Felipe</td></tr>
				<tr><td>Odicio Vilchez Joan Axel</td></tr>
				<tr><td>Rojas Ayala Myleni Beatriz</td></tr>
				<tr><td>Tanaka Terukina Ricardo</td></tr>
				<tr><td>Tarrillo Celada Cesar Alfredo</td></tr>
				<tr><td>Velasquez Hinostroza Katherine Luisa</td></tr>
			</tbody>
		</table>
		<br>
		<a href="" class="btn btn-info">Guardar Cambios</a>
	</div>
</div>
@endsection