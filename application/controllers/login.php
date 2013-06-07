<?php
class Login_Controller extends Base_Controller {

	//public $restful = false;

	public function action_index()
	{
		return Redirect::to('/');
	}

	public function action_login()
	{


		$credentials = array(
				'username'	=> Input::get('username'),
				'password'	=> Input::get('password')
			);
		$rules = array(
				'username'	=> 'required',
				'password'	=> 'required'
			);
		$validation = Validator::make($credentials, $rules);
		if($validation->fails())
		{
			return Redirect::to('/')
					->with_errors($validation)
					->with_input();
		}
		if(Auth::attempt($credentials))
		{
			echo "SI"; 
			var_dump(Auth::user()); 
			echo "<br>SESSION:<br>";
			echo Session::get('attributes');
					
			return Redirect::to('cursos');
		}
		else
		{
			echo "NO"; exit();
			return View::make('home.index')
					->with('login_errors', true);
		}
	}

	public function action_logout()
	{
		Auth::logout();
		//echo URL::to('js'); exit();
		return Redirect::to('/');
	}
}