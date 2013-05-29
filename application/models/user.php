<?php 
class User extends Eloquent {

	public static $table	= 'user';
	public static $key		= 'user_id';

	public function student()
	{
		return $this->belongs_to('Student');
	}

	public function professor()
	{
		return $this->belongs_to('Profesor');
	}

	public function administrator()
	{
		return $this->belogs_to('Administrator');
	}

}