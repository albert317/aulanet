<?php
class Agenda_Controller extends Base_Controller {



	
	public function action_groupactivityes()
	{
		$arr=array();
		$studentactivity=null;
		//$groupactivity = Groupactivity::where('classgroup_id','=',$group_id)->get();
		if(Auth::user()->type=="S"){

		$current_user = Auth::user()->student()->first();
		$assignments=DB::query('SELECT * from group_student gs, assignment a 
			WHERE a.classgroup_id=gs.classgroup_id and gs.student_id='.$current_user->student_id);

			$studentactivity= Studentactivity::where("student_id",'=',$current_user->student_id);

			$groupactivity=DB::query('SELECT * from group_student gs, group_activity ga 
			WHERE ga.classgroup_id=gs.classgroup_id and gs.student_id='.$current_user->student_id);


		foreach ($studentactivity as $st) {
			array_push($arr, array(
				'id'=>$st->student_activity_id,
				'title'=> $st->title,
				'start'=> $st->end_time
				));
		}

		}
		else{
			$current_user = Auth::user()->professor()->first();
			$assignments=DB::query('SELECT * from classgroup cg, assignment a 
				WHERE a.classgroup_id=cg.classgroup_id and cg.professor_id='.$current_user->professor_id);

			$groupactivity=DB::query('SELECT * from classgroup gs, group_activity ga 
			WHERE ga.classgroup_id=gs.classgroup_id and gs.professor_id='.$current_user->professor_id);

		}
		//echo "<pre>";
		//print_r($assignments);
		//echo "</pre>";
		//exit();

		
		//var_export($assignments);
		//exit();		
		
		$i=0;
		$year = date('Y');
		$month = date('m');
		foreach ($groupactivity as $g) {
			array_push($arr, array(
				'id'=>$g->group_activity_id,
				'title'=> $g->title,
				'start'=> $g->end_time
				));
		}

		foreach($assignments as $g)
		{
			array_push($arr, array(
				'id'=> $g->assignment_id,
				'title'=> $g->name,
				'start'=> $g->end_date,
				));
		}

		$data= array(
			'groupactivity'	=> $groupactivity,
			'assignments'=>$assignments,
			'studentactivity'=>$studentactivity,
		);
		
		//var_dump($arr);
		//return View::make('course.tasks', $data);	
		return View::make('agenda.agenda',$data)->with('js_config', $arr);
	}

	/**
	 * Muestra la agenda
	 */
	/*
	public function action_index()
	{
		return View::make('agenda.agenda');
	}
	*/

	/**
	 * Muestra el listado de actividaes grupales idivudules y tareas pertenecientes a un alumno
	 */
	/*
	
	public function action_groupactivityes()
	{
		//$groupactivity = Groupactivity::where('classgroup_id','=',$group_id)->get();
		$groupactivity = Groupactivity::all();
		$assignments = Assignment::all();
		$studentactivity= Studentactivity::all();
		//var_export($assignments);
		//exit();
		
		$arr=array();
		$i=0;
		$year = date('Y');
		$month = date('m');
		foreach($groupactivity as $g)
		{
			array_push($arr, array(
				'id'=> $g->group_activity_id,
				'title'=> $g->title,
				'start'=> $g->end_time
				));
		}
		foreach($assignments as $g)
		{
			array_push($arr, array(
				'id'=> $g->assignment_id,
				'title'=> $g->name,
				'start'=> $g->end_date,
				));
		}
		foreach ($studentactivity as $st) {
			array_push($arr, array(
				'id'=>$st->student_activity_id,
				'title'=>$st->title,
				'start'=> $g->end_time
				));
		}


		$data= array(
			'groupactivity'	=> $groupactivity,
			'assignments'=>$assignments,
			'studentactivity'=>$studentactivity,
		);
		
		//var_dump($arr);
		//return View::make('course.tasks', $data);	
		return View::make('agenda.agenda',$data)->with('js_config', $arr);
	}


	*/
}