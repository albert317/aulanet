<?php
class Administrador_Controller extends Base_Controller {

	/**
	* Muestra el listado de cursos disponibles
	* (No muestra la barra de navegacion)
	*/
	public function action_index(){
		$current_user = Auth::user();
		if($current_user->type=='A'){
			return View::make('administrator.profile');
		}
		else{				
			return Redirect::to('cursos');
		}
		
	}

	public function action_createS(){
		//echo "holaaaaa";
		//$apellido =  Input::get('apellido');
		if(Input::get('codigo')=='' || Input::get('nombre')=='' || Input::get('apellido')==''){
			echo "debe ingresar todos los datos";
		}
		else{
			$user = new User;
			$user->username = Input::get('codigo');
			$user->password = Hash::make('123');
			$user->type='S';
			$user->names=Input::get('nombre');
			$apellido=explode(' ', Input::get('apellido'));
			$user->last_name1= $apellido[0];
			//$user->last_name2= $apellido[1];
			$user->email= Input::get('codigo').'@unmsm.edu.pe';
			//$user->save();

			//echo $user->email;
			//echo $user->last_name1;
			//echo $user->last_name2;

			echo "Se agrego al alumno ".$user->names." ".Input::get('apellido')." con el codigo ".$user->username;
			$student = new Student;
			$student->user_id=$user->get_key();
			//$student->save();
		}
		

		
		/*if(Input::get("tipo")=='individual'){
			$assignment->type='S';
		}else{
			$assignment->type='G';
		}
		$assignment->start_date=date("Y-m-d");
		$assignment->save();
		$S_name =Input::get('nombre');
		$S_apellido =Input::get('apellido');
		$S_codigo =Input::get('codigo');
		$S_escuela =Input::get('escuela');
		
		echo $S_name;
		echo $S_escuela;
		echo $S_codigo;
		echo $S_apellido;*/


		//return View::make('cursos');
	}

	public function action_createT(){
		//echo "holaaaaa";
		$S_name =Input::get('nombre');
		$S_apellido =Input::get('apellido');
		$S_codigo =Input::get('codigo');
		
		echo $S_name;
		echo $S_codigo;
		echo $S_apellido;

		
		//return View::make('cursos');
	}

	public function action_createCourse(){

	}

	public function action_assignCourse(){

	}
}