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
			//echo "debe ingresar todos los datos";
			/*echo "<div class='alert'>
  <button type='button' class='close' data-dismiss='alert'>&times;</button>
  <strong>Warning!</strong> Best check yo self, you're not looking too good.
</div>";*/
		}
		else{
			$user = new User;
			$user->username = Input::get('codigo');
			$user->password = Hash::make('123');
			$user->type='S';
			$user->names=Input::get('nombre');

			$apellido=explode(' ', Input::get('apellido'));
			
			$user->last_name1= $apellido[0];
			$user->last_name2= $apellido[1];
			$user->email= Input::get('codigo').'@unmsm.edu.pe';
			$user->save();

			$student = new Student;
			$student->user_id=$user->get_key();
			$student->save();

		}
		
		return Redirect::to('administrador');
	}

	public function action_createT(){
		//echo "holaaaaa";

		if(Input::get('codigo')=='' || Input::get('nombre')=='' || Input::get('apellido')==''){
			echo "debe ingresar todos los datos";
		}
		else{
			$user = new User;
			$user->username = Input::get('codigo');
			$user->password = Hash::make('123');
			$user->type='T';
			$user->names=Input::get('nombre');

			$apellido=explode(' ', Input::get('apellido'));
			
			$user->last_name1= $apellido[0];
			$user->last_name2= $apellido[1];
			$user->email= Input::get('codigo').'@unmsm.edu.pe';
			$user->save();

			$professor = new Professor;
			$professor->user_id=$user->get_key();
			$professor->save();

		}
		return Redirect::to('administrador');
	}

	public function action_createCourse(){
		if(Input::get('curso')==''){
			echo "debe ingresar todos los datos";
		}
		else{
			$course = new Course;
			$course->name = Input::get('curso');
			$course->eap = Input::get('escuela');
			$course->term = Input::get('ciclo');
			$course->save();

		}
		return Redirect::to('administrador');

	}

	public function action_assignCourse(){

		//$var=$_POST['file'];

		//echo json_encode("hola");
		echo (Input::get('grupo'))."  ";
		echo (Input::get('cursosCiclo'))."  ";
		echo (Input::get('escuela'))."  ";
		echo (Input::get('ciclos'))."  ";

		$filename = Input::file('file.name');
		echo "---------";
		
		Input::upload('file', 'public/uploads', $filename);
		$file_path = URL::base().'/uploads/'.Input::file('file.name');

		//$file_path ="C:/Users/Velasquez/Desktop/Alumnos.xlsx";


		// Turn XLS file into an array
	    require_once 'bundles/laravel-phpexcel/PHPExcel/IOFactory.php';

	    $objPHPExcel = PHPExcel_IOFactory::load($file_path);
	    $rows = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);

	    // get the column names
	    $xls_fields = isset($rows[1]) ? $rows[1] : array();
	    if (! empty($xls_fields))
	        unset($rows[1]);

	    // xls returns $value = array('A' => 'value'); so you have to remove keys
	    $fields = array();
	    foreach ($xls_fields as $field) {
	        $fields[] = strtolower($field);
	    }

	    

	    foreach ($rows as $row) {
	        // remove keys again
	        $data = array();
	        foreach ($row as $key => $value) {
	            //$data[] = $value;
	            echo ($value)."  ";
	        }
	        
	    }

	    //$this->contact_count = count($rows);
	    unset($rows);
	    unset($objPHPExcel);

	}

	public function action_getCourse(){
		$var=$_POST['ciclo'];
		$cursos = Course::where('term','=',$var)->get();
		echo json_encode($cursos);
	}
}