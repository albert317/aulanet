<?php 
class User extends Eloquent {

	public static $table	= 'user';
	public static $key		= 'user_id';

	public function student()
	{
		return $this->has_one('Student','user_id');
	}

	public function professor()
	{
		return $this->belongs_to('Professor');
	}

	public function administrator()
	{
		return $this->belongs_to('Administrator');
	}

	

}