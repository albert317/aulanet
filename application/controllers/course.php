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
	 * Muestra el listado de actividaes grupales y tareas pertenecientes a un curso
	 */
	public function action_groupactivityes($group_id)
	{

		$groupactivity = Groupactivity::where('classgroup_id','=',$group_id)->get();
		$assignments = Assignment::where('classgroup_id','=',$group_id)->get();
		//var_export($assignments);
		//exit();
		$nombre = Classgroup::find($group_id)->course()->first()->name;
		
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
		$data= array(
			'groupactivity'	=> $groupactivity,
			'assignments'=>$assignments,
			'nombre' => $nombre,
			'group_id'=> $group_id,
		);
		
		//var_dump($arr);
		//return View::make('course.tasks', $data);	
		return View::make('course.agenda',$data)->with('js_config', $arr);
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
		$teams=DB::query('SELECT * from team t,student s, student_team st
					where t.team_id=st.team_id and s.student_id=st.student_id and t.assignment_id='.$assignment_id.' and s.student_id='.$student_id);

				//echo"<pre>	";
				//print_r($teams);
				//echo"</pre>";
				//exit();
		$teamid=null;
		foreach ($teams as $t) {
			$teamid=$t->team_id;
		}
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
		$assignmentsquery = DB::query('SELECT * from assignment a
			where a.assignment_id='.$assignments_id);
		//Assignment::find($assignments_id)->first();
		$assignments=null;
		foreach ($assignmentsquery as $aq) {
			$assignments=$aq;
		}
		$assignmentfilequery= DB::query('SELECT * from assignmentfile af 
			where af.assignment_id='.$assignments_id);
		$assignmentfile=array();
		$i=0;
		foreach ($assignmentfilequery as $asq) {
			$assignmentfile[$i]=$asq;
			$i++;

		}


		$teamfile=null;
		$students=null;
		$single=null;
		$group=null;
		$single_files=array();
		if(Auth::user()->type=='S'){
			$student_id=Auth::user()->student()->first()->student_id;
			$teamid=Student::find($student_id)->team()->where('assignment_id','=',$assignments_id)->first()->team_id;
			$teamfile=Teamfile::where('team_id','=',$teamid)->get();
		}
		elseif(Auth::user()->type=='T'){
			$professor_id=Auth::user()->professor()->first()->professor_id;
			if($assignments->type=='S'){
				$single_student=DB::query('SELECT * from team t,student s,student_team st, user u
					where u.user_id=s.user_id and t.team_id=st.team_id and s.student_id=st.student_id and t.assignment_id='.$assignments_id);
				$single_files=DB::query('SELECT s.student_id,tf.created_at,tf.updated_at,tf.url,tf.title,tf.description
					from team t,teamfile tf,student s,student_team st
					where t.team_id=st.team_id and s.student_id=st.student_id and t.team_id=tf.team_id and t.assignment_id='.$assignments_id);
				$i=0;
				foreach ($single_student as $s) {
					$arr=array();
					$arr['student']=$s;
					$arrays=array();
					$j=0;
					foreach ($single_files as $sf) 
					{
						if($s->student_id==$sf->student_id)
						{
							$arrays[$j]=$sf;
							$j++;
						}
					}
					$arr['files']=$arrays;
					$single[$i]=$arr;
					$i++;
				}
			}
			else{
				$group_teams=DB::query('SELECT * from team t
					where t.assignment_id='.$assignments_id);
				$group_students=DB::query('SELECT * from team t,student s,student_team st, user u
					where u.user_id=s.user_id and t.team_id=st.team_id and s.student_id=st.student_id and t.assignment_id='.$assignments_id);
				$single_files=DB::query('SELECT t.team_id,tf.created_at,tf.updated_at,tf.url,tf.title,tf.description
					from team t,teamfile tf
					where t.team_id=tf.team_id and t.assignment_id='.$assignments_id);
				$i=0;
				foreach ($group_teams as $gt) {

					$arr=array();
					$arr['group']=$gt;
					$j=0;
					$arrays=array();
					foreach ($group_students as $s) {
						if($s->team_id==$gt->team_id)
						{
							$arrays[$j]=$s;
						}					
						$j++;
					}

					$arr['student']=$arrays;
					$j=0;
					$arrays=array();
					foreach ($single_files as $sf) 
					{
							
						if($gt->team_id==$sf->team_id)
						{
							$arrays[$j]=$sf;
						}
						$j++;
					}
					$arr['files']=$arrays;
					$single[$i]=$arr;
					$i++;
				}

				//echo"<pre>	";
				//print_r($single);
				//echo"</pre>";
				//exit();
			}
		}
		$nombre=Classgroup::find($group_id)->course()->first()->name;

		$data = array(
						'assignments'	=> $assignments,
						'teamfile'=>$teamfile,
						'group_id'=>$group_id,
						'assignment_file'=>$assignmentfile,
						'assignment_id'=>$assignments_id,
						'nombre'=>$nombre,
						'single'=>$single,
						'group'=>$group

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
		$assignmentfile->title=Input::file('file.name');
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
		for($i=0;$i<$max;$i++){
			$team=new Team;
			$team->assignment_id=$assignment_id;
			$team->save();
			for($k=0;$k<count($var);$k++){
				if($i+1==$var[$k][1]){

					$team->student()->attach($var[$k][0]);
				}
			}
		}

		

	}

	public function action_grades($group_id)
	{
		$nombre=Classgroup::find($group_id)->course()->first()->name;
		$students=DB::query('SELECT * from user u,student s,group_student st
			where u.user_id=s.user_id and s.student_id=st.student_id and st.classgroup_id='.$group_id);
		$grades=DB::query('SELECT st.id,g.field,g.value,g.weight from user u,student s,group_student st,grade g
			where u.user_id=s.user_id and s.student_id=st.student_id and g.group_student_id=st.id and st.classgroup_id='.$group_id);
		
		$grades_name=array();
		$i=0;
		foreach ($grades as $g) {
			$value=false;
			foreach ($grades_name as $gm) {
				if($g->field==$gm['field']){
					$value=true;
				}
			}
			if($value==false){
				$arr['field']=$g->field;
				$arr['weight']=$g->weight;
				$grades_name[$i]=$arr; 
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
						if($grades_name[$k]['field']==$g->field){
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
	public function action_updateattendance($group_id){
		$students=DB::query('SELECT * from user u,student s,group_student st
			where u.user_id=s.user_id and s.student_id=st.student_id and st.classgroup_id='.$group_id);
		date_default_timezone_set('UTC');
		foreach ($students as $s) {
			$attendance=new Attendance;
			$attendance->group_student_id=$s->id;
			$attendance->type=Input::get($s->student_id);
			$attendance->date=date("Y-m-d H:m:s");
			$attendance->save();
		}
		return Redirect::to('cursos/'.$group_id.'/asistencia');
	}

	public function action_updategrades($group_id)
	{
		$students=DB::query('SELECT * from user u,student s,group_student st
			where u.user_id=s.user_id and s.student_id=st.student_id and st.classgroup_id='.$group_id);
		$grade_name=Input::get('nombre');
		$grade_weight=Input::get('peso');
		foreach ($students as $s) {
			$grade=new Grade;
			$grade->group_student_id=$s->id;
			$grade->value=Input::get($s->student_id);
			$grade->weight=$grade_weight;
			$grade->field=$grade_name;
			$grade->save();
		}
		return Redirect::to('cursos/'.$group_id.'/notas');
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