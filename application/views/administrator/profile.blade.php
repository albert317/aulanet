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
	<div class="opciones_administrador">
		<!--<ul class="nav">
		  <li class="active">
		    <a href="#">Home</a>
		  </li>
		  <li><a href="#">Link</a></li>
		  <li><a href="#">Link</a></li>
		</ul>-->
		
		<a href="#RegistrarUsuario" data-toggle="modal"><img src={{URL::to('img/registrar_usuario.png')}} class="img-polaroid"></a>
		<a href="#RegistrarCurso" data-toggle="modal"> <img src={{URL::to('img/registrar_curso.png')}} class="img-polaroid"></a>
		<a href="#AsignarCurso" data-toggle="modal"><img src={{URL::to('img/asignar_curso.jpg')}} class="img-polaroid"></a>
	</div>

	<!-- Modal Registrar Usuario-->
	<div id="RegistrarUsuario" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-header">
		    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		    <h4>Registrar Usuario</h4>
		</div>
		<div class="modal-body">	
			<div class="control-group">
				<div class="tabbable"> 
					<ul class="nav nav-tabs">
						<li class="active"><a href="#tab1" data-toggle="tab">Alumno</a></li>
				    	<li><a href="#tab2" data-toggle="tab">Docente</a></li>
				  	</ul>
				  	<div class="tab-content">
				    	<div class="tab-pane active" id="tab1">
				    		{{ Form::open_for_files('','POST', array('class'=>'form-horizontal')) }}
							<fieldset>
								<div class="control-group">
									<label class="control-label"  for="nombre">Nombre</label>
									<div class="controls">
										{{ Form::text('nombre', '', array('class'=>'input-xlarge')) }}
									</div>
								</div>
								<div class="control-group">
									<label class="control-label" for="apellido">Apellido</label>
									<div class="controls">
										{{ Form::text('apellido', '', array('class'=>'input-xlarge')) }}
									</div>
								</div>
								<div class="control-group">
									<label class="control-label" for="codigo">Código</label>
									<div class="controls">
										{{ Form::text('codigo', '', array('class'=>'input-xlarge')) }}
									</div>
								</div>
								<div class="control-group">
									<label class="control-label"  for="escuela">Escuela</label>
									<div class="controls">
										{{ Form::select('size', array('SI' => 'EAP Ing. de Sistemas', 'SW' => 'EAP Ing. de Software'), array('SI', 'SW')) }}
									</div>
								</div>
								<div class="control-group">
									<div class="controls">
										<button class="btn btn-inverse" data-dismiss="modal" aria-hidden="true">Cancelar</button>
										{{ Form::submit('Guardar', array('class' => 'btn btn-info')) }}
									</div>
								</div>
							</fieldset>
							{{ Form::close() }}
				    	</div>
				    	<div class="tab-pane" id="tab2">
				      		{{ Form::open_for_files('','POST', array('class'=>'form-horizontal')) }}
							<fieldset>
								<div class="control-group">
									<label class="control-label"  for="nombre">Nombre</label>
									<div class="controls">
										{{ Form::text('nombre', '', array('class'=>'input-xlarge')) }}
									</div>
								</div>
								<div class="control-group">
									<label class="control-label" for="apellido">Apellido</label>
									<div class="controls">
										{{ Form::text('apellido', '', array('class'=>'input-xlarge')) }}
									</div>
								</div>
								<div class="control-group">
									<label class="control-label" for="codigo">Código</label>
									<div class="controls">
										{{ Form::text('codigo', '', array('class'=>'input-xlarge')) }}
									</div>
								</div>
								<div class="control-group">
									<div class="controls">
										<button class="btn btn-inverse" data-dismiss="modal" aria-hidden="true">Cancelar</button>
										{{ Form::submit('Guardar', array('class' => 'btn btn-info')) }}
									</div>
								</div>
							</fieldset>
							{{ Form::close() }}
				    	</div>
				  	</div>
				</div>
			</div>
		</div>
	</div>



	<!-- Modal Registrar Curso-->
	<div id="RegistrarCurso" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-header">
		    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		    <h4>Registrar Curso</h4>
		</div>
		<div class="modal-body">	
			{{ Form::open_for_files('','POST', array('class'=>'form-horizontal')) }}
			<fieldset>
				<div class="control-group">
					<label class="control-label"  for="escuela">Escuela</label>
					<div class="controls">
						{{ Form::select('size', array('SI' => 'EAP Ing. de Sistemas', 'SW' => 'EAP Ing. de Software'), array('SI', 'SW')) }}
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="ciclo">Ciclo</label>
					<div class="controls">
						{{ Form::select('size', array('II' => 'II', 'I' => 'I'), array('I', 'II')) }}
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="curso">Curso</label>
					<div class="controls">
						{{ Form::text('curso', '', array('class'=>'input-xlarge')) }}
					</div>
				</div>
				<div class="control-group">
					<div class="controls">
						<button class="btn btn-inverse" data-dismiss="modal" aria-hidden="true">Cancelar</button>
						{{ Form::submit('Guardar', array('class' => 'btn btn-info')) }}
					</div>
				</div>
			</fieldset>
			{{ Form::close() }}
		</div>
	</div>

	<!-- Modal Asignar Curso-->
	<div id="AsignarCurso" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-header">
		    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		    <h4>Asignar Curso</h4>
		</div>
		<div class="modal-body">	
			{{ Form::open_for_files('','POST', array('class'=>'form-horizontal')) }}
			<fieldset>
				<div class="control-group">
					<label class="control-label"  for="escuela">Escuela</label>
					<div class="controls">
						{{ Form::select('size', array('SI' => 'EAP Ing. de Sistemas', 'SW' => 'EAP Ing. de Software'), array('SI', 'SW')) }}
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="ciclo">Ciclo</label>
					<div class="controls">
						{{ Form::select('size', array('II' => 'II', 'I' => 'I'), array('I', 'II')) }}
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="curso">Curso</label>
					<div class="controls">
						{{ Form::select('size', array('MB' => 'Matematica Basica', 'PI' => 'Programacion I'), array('MB', 'PI')) }}
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="fecha">Archivo</label>
					<div class="controls">
						{{ Form::file('file', array('class'=>'input-xlarge')) }}
					</div>
				</div>
				<div class="control-group">
					<div class="controls">
						<button class="btn btn-inverse" data-dismiss="modal" aria-hidden="true">Cancelar</button>
						<button class="btn btn-info" data-dismiss="modal" aria-hidden="true">Cargar Curso</button>
						{{ Form::submit('Guardar', array('class' => 'btn btn-info')) }}
					</div>
				</div>
			</fieldset>
			{{ Form::close() }}
		</div>
	</div>

</div>
@endsection