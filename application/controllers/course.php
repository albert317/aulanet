<?php
class Course_Controller extends Base_Controller {

	/**
	* Muestra el listado de cursos disponibles
	* (No muestra la barra de navegacion)
	*/

	private function validate_group($group_id)
	{
		$current_user = Auth::user();
		//$group = DB::query("SELECT * FROM `group` g, student s,group_student gs   WHERE g.group_id=".$group_id." and s.student_id=".$current_user->student()->first()->student_id." and s.student_id=gs.student_id and g.group_id=gs.group_id");
		$group=Groupstudent::where('classgroup_id','=',$group_id)
							->where('student_id','=',$current_user->student_id);
		//var_export($group);
		//exit();
		if(count($group)==0){
			
			return Redirect::to('/');
		}
		else{
			return null;
		}
	}

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
			case 'T':
				$current_user = $current_user->professor()->first();
				break;
			case 'A':
				$current_user = $current_user->administrator()->first();
				break;
		}		
		//echo Auth::user()->names;exit();
		$groups = $current_user->classgroup()->get();
		$groupscourses = array();
		foreach ($groups as $g) {
			$groupcourses[] = 	array(
									'name'		=> $g->course()->first()->name,
									'group_id'	=> $g->classgroup_id
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
		//$tasks = Task::where('group_id', '=', $group_id)->get();
		//$assignments = Group::find($group_id)->first()->assignment()->get();
		$val=$this->validate_group($group_id);
		if($val!=null){
			return $val;
		}
		//var_export($group_id);
		//$assignments = DB::query("SELECT * FROM `clasg` g, assignment a   WHERE g.group_id=".$group_id." and a.group_id=g.group_id");
		$assignments = Assignment::where('classgroup_id','=',$group_id)->get();//Classgroup::find($group_id)->get();//;->first();->assignment()->get();
		//var_export($assignments);
		//exit();
		$nombre = Classgroup::find($group_id)->course()->first()->name;
		$data		 = array(

							'assignments'	=> $assignments,
							'nombre' => $nombre,
							'group_id'=> $group_id
						);
		//var_dump($data);
		return View::make('course.tasks', $data);	
	}


	/**
	 * Muestra el foro del curso
	 */
	public function action_forum($group_id)
	{
		/*REFACTORIZARLO MAS ADELANTE*//*REFACTORIZARLO MAS ADELANTE*/
		/*REFACTORIZARLO MAS ADELANTE*//*REFACTORIZARLO MAS ADELANTE*/
		/*REFACTORIZARLO MAS ADELANTE*//*REFACTORIZARLO MAS ADELANTE*/
		/*REFACTORIZARLO MAS ADELANTE*//*REFACTORIZARLO MAS ADELANTE*/
		/*REFACTORIZARLO MAS ADELANTE*//*REFACTORIZARLO MAS ADELANTE*/
		/*REFACTORIZARLO MAS ADELANTE*//*REFACTORIZARLO MAS ADELANTE*/
		$nombre=Classgroup::find($group_id)->course()->first()->name;
		/*REFACTORIZARLO MAS ADELANTE*//*REFACTORIZARLO MAS ADELANTE*
		/*REFACTORIZARLO MAS ADELANTE*//*REFACTORIZARLO MAS ADELANTE*/
		/*REFACTORIZARLO MAS ADELANTE*//*REFACTORIZARLO MAS ADELANTE*/
		/*REFACTORIZARLO MAS ADELANTE*//*REFACTORIZARLO MAS ADELANTE*/
		/*REFACTORIZARLO MAS ADELANTE*//*REFACTORIZARLO MAS ADELANTE*/
		$data= array(
						'group_id'=> $group_id,
						'nombre'=>$nombre
					);
		return View::make('course.forum',$data);
	}

	public function action_upload($group_id,$assignment_id)
	{
		$val=$this->validate_group($group_id);
		if($val!=null){
			return $val;
		}
		$this->validate_group($group_id);
		$student_id=Auth::user()->student()->first()->student_id;
		/*$teamid=
		DB::table('team')
			->join('assignment','team.assignment_id', '=','assignment.assignment_id')
			->join('student_team','team.team_id', '=', 'student_team.team_id')
			->where('student_team.student_id','=',Auth::user()->student()->first()->student_id)->first()	;
		*/

		//$teamid=DB::query('SELECT * FROM team t,assignment a,student_team st	WHERE t.team_id=st.team_id AND t.assignment_id=a.assignment_id AND st.student_id='.$student_id);
		$teamid=Student::find($student_id)->team()->where('assignment_id','=',$assignment_id)->first()->team_id;//->assignment()->first()->assignment_id;
			
		
		$assignments = Assignment::find($assignment_id)->first();
		$assignmentfile=new Teamfile;
		$assignmentfile->description=Input::get('descripcion');
		$assignmentfile->title=Input::file('file.name');
		$assignmentfile->url=URL::base().'/uploads/'.Input::file('file.name');
		$assignmentfile->team_id=$teamid;
		$assignmentfile->save();
		$filename = Input::file('file.name');
		Input::upload('file', 'public/uploads', $filename);
		$assignments_option = Classgroup::find($group_id)->first()->assignment()->get();
		$nombre=Classgroup::find($group_id)->course()->first()->name;
		$data = array(
							'assignments'	=> $assignments_option,
							'group_id'=>$group_id,
							'assignment_id'=>$assignment_id,
							'nombre'=>$nombre
						);
		return View::make('course.tasks',$data);
		
	}
	public function action_viewsilabus($group_id)
	{
		$urlSilabus=URL::base().'/uploads/course/'.$group_id.'/syllabus.docx';
		$nombre=Classgroup::find($group_id)->course()->first()->name;
		/*REFACTORIZARLO MAS ADELANTE*//*REFACTORIZARLO MAS ADELANTE*
		/*REFACTORIZARLO MAS ADELANTE*//*REFACTORIZARLO MAS ADELANTE*/
		/*REFACTORIZARLO MAS ADELANTE*//*REFACTORIZARLO MAS ADELANTE*/
		/*REFACTORIZARLO MAS ADELANTE*//*REFACTORIZARLO MAS ADELANTE*/
		/*REFACTORIZARLO MAS ADELANTE*//*REFACTORIZARLO MAS ADELANTE*/
		$data= array(
						'group_id'=> $group_id,
						'nombre'=>$nombre,
						'urlSilabus'=>$urlSilabus
					);
		return View::make('course.versilabus',$data);
	}
	public function action_taskdetail($group_id,$assignments_id)
	{
		if(Auth::user()->type=='T'){
			$all=DB::query('SELECT * from user u,student s,student_team st,team t, assignment a
			where u.user_id=s.user_id and s.student_id=st.student_id and t.team_id=st.team_id and a.assignment_id=t.assignment_id and a.assignment_id='.$assignments_id);
			echo "<pre>";
			print_r($all);
			echo "</pre>";
			exit();
		}

		$val=$this->validate_group($group_id);
		if($val!=null){
			return $val;
		}
		$assignments = Assignment::find($assignments_id)->where('classgroup_id','=',$group_id)->first();
		
		$student_id=Auth::user()->student()->first()->student_id;
		
		//$teamfile = DB::query("SELECT * FROM teamfile as tf,team as t where t.assignment_id = 1 and tf.team_id = t.team_id");
		//DB::table("teamfile")->get()->where('team_id','=',1)->first();
		$teamid=Student::find($student_id)->team()->where('assignment_id','=',$assignments_id)->first()->team_id;//->assignment()->first()->assignment_id;
		
		$teamfile=Teamfile::where('team_id','=',$teamid)->get();
		$assignments = Assignment::where('assignment_id','=',$assignments_id)->first();	
		$nombre=Classgroup::find($group_id)->course()->first()->name;
		$data		 = array(
							'assignments'	=> $assignments,
							'teamfile'=>$teamfile,
							'group_id'=>$group_id,
							'assignment_id'=>$assignments_id,
							'nombre'=>$nombre
						);
		return View::make('course.subirtarea', $data);
		
	}

	public function action_newtask($group_id)
	{
		//$this->validate_group($group_id);
		//$student_id=Auth::user()->student()->first()->student_id;

		/*$teamid=
		DB::table('team')
			->join('assignment','team.assignment_id', '=','assignment.assignment_id')
			->join('student_team','team.team_id', '=', 'student_team.team_id')
			->where('student_team.student_id','=',Auth::user()->student()->first()->student_id)->first()	;
		*/

		//$teamid=DB::query('SELECT * FROM team t,assignment a,student_team st	WHERE t.team_id=st.team_id AND t.assignment_id=a.assignment_id AND st.student_id='.$student_id);
		//$teamid=Student::find($student_id)->team()->where('assignment_id','=',$assignment_id)->first()->team_id;//->assignment()->first()->assignment_id;
		//$professor=Auth::user()->professor()->first();
		date_default_timezone_set('UTC');
		$assignment=new Assignment;
		$assignment->classgroup_id=$group_id;
		$assignment->name=Input::get("enunciado");
		$assignment->description=Input::get("descripcion");
		$assignment->end_date=Input::get("fecha");
		if(Input::get("tipo")=='individual'){
			$assignment->type='S';
		}else{
			$assignment->type='G';
		}
		$assignment->start_date=date("Y-m-d");
		$assignment->save();
		$assignment_id=$assignment->get_key();
		$assignmentfile=new Assignmentfile;
		$assignmentfile->assignment_id=$assignment_id;
		$assignmentfile->url=URL::base().'/uploads/assignmentfile/'.$assignment_id.'/'.Input::file('file.name');
		$assignmentfile->save();

		$filename = Input::file('file.name');

		Input::upload('file', 'public/uploads/assignmentfile/'.$assignment_id.'/', $filename);


		
		//$assignments_option = Classgroup::find($group_id)->first()->assignment()->get();
		//$data = array(
		//					'assignments'	=> $assignments_option
		//				);
		/*$enunciado 	= Input::get("enunciado"); 
		$descripcion= Input::get("descripcion"); 
		$fecha		= Input::get("fecha"); 
		$tipo 	 	= Input::get("tipo"); 
		$file 		= Input::get("file");*/
		//return Redirect::to('cursos');
		if($assignment->type=="S")
		{
			$students=Groupstudent::where('classgroup_id','=',$group_id)->get();
			foreach($students as $s)
			{
				$team=new Team;
				$team->assignment_id=$assignment_id;
				$team_id=$team->save();
				$team->student()->attach($s->student_id);
			}
			return Redirect::to('cursos/'.$group_id.'/tareas');
		}
		else{
			return Redirect::to('cursos/'.$group_id.'/tareas/creartarea/'.$assignment_id);
		}

		//return View::make('course.creategroup');
	}

	public function action_newgroup($group_id,$assignment_id)
	{
		$users=DB::query('SELECT * from user u,student s,group_student st 
			where u.user_id=s.user_id and s.student_id=st.student_id and st.classgroup_id='.$group_id);
	
		$data=array(
							'users'	=> $users,
							'$assignment_id'=>$assignment_id
						);


		return View::make('course.creategroup',$data);
	}

	public function action_creategroup($group_id,$assignment_id)
	{
		
		$students=Groupstudent::where('classgroup_id','=',$group_id)->get();
		$var=$_POST['alumnos'];

		$max=0;
		for($i=0;$i<count($var);$i++){
			if($max<$var[$i][1]){
				$max=$var[$i][1];
			}
		}

		$arr=array();
		for($i=0;$i<$max;$i++){
			$team=new Team;
			$team->assignment_id=$assignment_id;
			$team_id=$team->save();
			$arr[$i]=$team_id;
		}

		foreach($var as $v)
		{
			
			$team=Team::find($v[1])->first();
			$team->student()->attach($v[0]);
		}
		

	}


	public function action_grades($group_id)
	{
		$nombre=Classgroup::find($group_id)->course()->first()->name;
		$students=DB::query('SELECT * from user u,student s,group_student st
			where u.user_id=s.user_id and s.student_id=st.student_id and st.classgroup_id='.$group_id);
		$grades=DB::query('SELECT st.id,g.field,g.value from user u,student s,group_student st,grade g
			where u.user_id=s.user_id and s.student_id=st.student_id and g.group_student_id=st.id and st.classgroup_id='.$group_id);
		
		$grades_name=array();
		$i=0;
		foreach ($grades as $g) {
			$value=false;
			foreach ($grades_name as $gm) {
				if($g->field==$gm){
					$value=true;
				}
			}
			if($value==false){
				$grades_name[$i]=$g->field;
				$i++;
			}
		}

		$students_array= array();
		$i=0;
		foreach($students as $s)
		{
			$j=0;
			$arr= array();
			$arr['student']=$s;
			$grades_array= array();
			foreach($grades as $g)
			{
				if($s->id==$g->id)
				{
					for ($k=0;$k<count($grades_name);$k++) {
						if($grades_name[$k]==$g->field){
							$grades_array[$k]=$g;
							$j++;
						}
					}
				}
			}

			$arr['grades']=$grades_array;
			$students_array[$i]=$arr;
			$i++;
		}
		

		$data= array(
						'group_id'=> $group_id,
						'nombre'=>$nombre,
						'students'=>$students_array,
						'grades_name'=>$grades_name
					);
		return View::make('course.grades',$data);
	}

	public function action_updategrades($group_id)
	{
		$nombre=Classgroup::find($group_id)->course()->first()->name;
		$students=DB::query('SELECT * from user u,student s,group_student st 
			where u.user_id=s.user_id and s.student_id=st.student_id and st.classgroup_id='.$group_id);



		$data= array(
						'group_id'=> $group_id,
						'nombre'=>$nombre,
						'students'=>$students
					);
		return View::make('course.grades',$data);
	}


	public function action_attendance($group_id)
	{
		$nombre=Classgroup::find($group_id)->course()->first()->name;
		$students=DB::query('SELECT * from user u,student s,group_student st
			where u.user_id=s.user_id and s.student_id=st.student_id and st.classgroup_id='.$group_id);
		$attendances=DB::query('SELECT st.id,a.date,a.type from user u,student s,group_student st,attendance a
			where u.user_id=s.user_id and s.student_id=st.student_id and a.group_student_id=st.id and st.classgroup_id='.$group_id);
		
		$attendances_dates=array();
		$i=0;
		foreach ($attendances as $a) {
			$value=false;
			foreach ($attendances_dates as $ad) {
				if($a->date==$ad){
					$value=true;
				}
			}
			if($value==false){
				$attendances_dates[$i]=$a->date;
				$i++;
			}
		}

		$students_array= array();
		$i=0;
		foreach($students as $s)
		{
			$j=0;
			$arr= array();
			$arr['student']=$s;
			$attendance_array= array();
			foreach($attendances as $a)
			{
				if($s->id==$a->id)
				{
					for ($k=0;$k<count($attendances_dates);$k++) {
						if($attendances_dates[$k]==$a->date){
							$attendance_array[$k]=$a;
							$j++;
						}
					}
				}
			}

			$arr['attendances']=$attendance_array;
			$students_array[$i]=$arr;
			$i++;
		}
		

		$data= array(
						'group_id'=> $group_id,
						'nombre'=>$nombre,
						'students'=>$students_array,
						'attendances_dates'=>$attendances_dates
					);
		return View::make('course.attendance',$data);
		
	}






}