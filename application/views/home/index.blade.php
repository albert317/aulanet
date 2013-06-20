@layout('layout.master')
@section('content')
	<aside>
		<img src={{URL::to('img/fisi.jpg')}} width="500">
	</aside>
	<div class="login">
		<h3>Bienvenidos al sistema...</h3>
		
	    {{ Form::open('login/login','POST', array('class'=>'form-horizontal')) }}
	        
	        <!-- username field -->
	        <div class="control-group">
				<label class="control-label" for="inputEmail">Código</label>
				<div class="controls">
					{{ Form::text('username') }}
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inputPassword">Contraseña</label>
				<div class="controls">
					{{ Form::password('password') }}
				</div>
			</div>
	        <!-- submit button -->
	        <div class="control-group">
				<div class="controls">
					<label class="checkbox">
						<input type="checkbox"> Recordarme
					</label>
					{{ Form::submit('Login', array('class' => 'btn')) }}
				</div>
			</div>
			<!-- check for login errors flash var -->
	        @if (Session::has('login_errors'))
	            <div class="alert alert-block">
				  	La combinación de usuario y contraseña es incorrecto!!!
				</div>
	        @endif
	    {{ Form::close() }}
	</div>
@endsection