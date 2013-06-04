<?php
class Login_Controller extends Base_Controller {

	public $restful = false;

	public function action_index()
	{
		echo "asdsad";
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
			echo "fallo"; exit();
			return Redirect::to('/')
					->with_errors($validation)
					->with_input();
		}
		if(Auth::attempt($credentials))
		{
			echo "SI"; exit();
			return Redirect::to('cursos');
		}
		else
		{
			var_dump($credentials); exit();
			return View::make('index')
					->with('login_errors', true);
		}
	}

	public function action_logout()
	{
		Auth::logout();
		return View::make('index');
	}
}