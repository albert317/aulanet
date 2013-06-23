<?php
class Forum_Controller extends Base_Controller {
	public $restful = true;

	public function get_index()
	{
		$u = Classgroup::find(1)->first();//ELiminar esto cuando las
		Session::put('current_group', $u);//sesiones esten bien implementadas
		$current_group 	= 	Session::get('current_group');
		$topics 		= 	Post::where('classgroup_id', '=', $current_group->classgroup_id)
								->where('answer_to', 'is', DB::raw('null'))
								->get();
		$data			=	array(
								'topics' => $topics
							);								
		return View::make('forum.forum', $data);
	}

	public function get_topic($post_id)
	{
		$u = Classgroup::find(1)->first();//ELiminar esto cuando las
		Session::put('current_group', $u);//sesiones esten bien implementadas
		$current_group	=	Session::get('current_group');
		$topic 			= 	Post::where('post_id', '=', $post_id)->first();
		$answers		=	Post::where('answer_to', '=', $topic->post_id)->get();
		$data			= 	array(
								'topic' => $topic,
								'answers' => $answers
							);
		return View::make('forum.topic', $data);

	}

	public function post_newtopic()
	{
		$input	=	Input::all();
		$rules	=	array(
						'title' => 'required',
						'text' => 'required'
					);
		$validation	=	Validator::make($input, $rules);
		if($validation->fails())
		{
			return Redirect::to('forum')
						->with_errors($validation)
						->with_input();
		}

		$newpost		= new Post();
		if(Auth::user()->type == 'S')
		{
			$newpost->student_id 	= Auth::user()->student()->first()->student_id;
			$newpost->professor_id	= null;
		}
		else
		{
			$newpost->professor_id 	= Auth::user()->professor()->first()->professor_id;
			$newpost->student_id	= null;
		}
		$newpost->answer_to			= null;
		$newpost->title 			= Input::get('title');
		$newpost->text 				= Input::get('text');
		$newpost->classgroup_id		= Session::get('current_group')->classgroup_id;
		$newpost->type 				= Input::get('type');
		$newpost->checked 			= Input::get('checked');
		$newpost->save();
		return Redirect::to('forum');
	}

	public function post_newanswer()
	{

		$input	=	Input::all();
		$rules	=	array(
						'title' => 'required',
						'text' => 'required',
						'topic_id' => 'required'
					);
		$validation	=	Validator::make($input, $rules);
		if($validation->fails())
		{
			return Redirect::to('forum/topic/'.Input::get('topic_id'))
						->with_errors($validation)
						->with_input();
		}
		$newpost		= new Post();

		if(Auth::user()->type == 'S')
		{
			$newpost->student_id 	= Auth::user()->student()->first()->student_id;
			$newpost->professor_id	= null;
		}
		else
		{
			$newpost->professor_id 	= Auth::user()->professor()->first()->professor_id;
			$newpost->student_id	= null;
		}
		$newpost->answer_to			= Input::get('topic_id');
		$newpost->title 			= Input::get('title');
		$newpost->text 				= Input::get('text');
		$newpost->classgroup_id		= Session::get('current_group')->classgroup_id;
		$newpost->type 				= 'POST';
		$newpost->checked 			= CHECKED_NOT;
		$newpost->save();
		return Redirect::to('forum/topic/'.$newpost->answer_to);
	}

}