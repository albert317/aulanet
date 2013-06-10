<?php
class Assignment extends Eloquent {
	public static $table	= 'assignment';
	public static $key		= 'assignment_id';

	public function assignment_file()
	{
		return $this->has_many('Assigmentfile', 'assignment_id');
	}

	public function group()
	{
		return $this->belongs_to('Group');
	}

	public function team()
	{
		return $this->has_many('Team', 'assignment_id');	
	}
}