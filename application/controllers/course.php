<?php
class Course_Controller extends Base_Controller {

	/**
	* Muestra el listado de cursos disponibles
	* (No muestra la barra de navegacion)
	*/
	public function action_index()
	{
		//$current_user = User::where('user_id', '=', Auth::user()->user_id)->first()->student()->first();//Student::where('user_id', '=', Auth::user()->user_id)->first()->user()->first();//::user()->student();
		//$current_user = Student::find(Auth::user()->user_id);
		$current_user = Auth::user();
		switch($current_user->type)	
		{
			case 'S': 
				$current_user = $current_user->student()->first();
				break;
			case 'P':
				$current_user = $current_user->professor()->first();
				break;
			case 'A':
				$current_user = $current_user->administrator()->first();
				break;
		}		
		//echo Auth::user()->names;exit();
		$groups = $current_user->group()->get();
		$groupcourses = array();
		foreach ($groups as $g) {
			$groupcourses[] = 	array(
									'name'		=> $g->course()->first()->name,
									'group_id'	=> $g->group_id
								);
		}
		$data = array(
					'current_user' 	=> $current_user,
					'groupcourses'	=> $groupcourses
				);

		return View::make('user.profile', $data);
	}
	
	/**
	 * Muestra el listado de tareas pertenecientes al curso
	 */
	public function action_tasks($group_id)
	{
		echo $group_id;
		//$tasks = Task::where('group_id', '=', $group_id)->get();
		$tasks = Group::find($group_id)->first()->assignment();
		var_dump($tasks);
		return View::make('course.tasks');	
	}

	/**
	 * Muestra la asistencia relativa al curso
	 */
	public function action_attendance()
	{
		return View::make('course.attendance');
	}

	/**
	 * Muestra las notas relativas al curso
	 */
	public function action_grades()
	{
		return View::make('course.grades');
	}

	/**
	 * Muestra el foro del curso
	 */
	public function action_forum()
	{
		return View::make('course.forum');
	}
}