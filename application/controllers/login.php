<?php
class Login_Controller extends Base_Controller {

	public $restful = true;

	public function action_index()
	{
		echo "login";
	}

	public function post_login()
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
		if(Auth.attempt($credentials))
		{
			return Redirect('cursos');
		}
		else
		{
			return Redirect::to('/')
					->with('login_errors', true);
		}
	}
}