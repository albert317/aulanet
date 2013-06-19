<?php
class Assignment extends Eloquent {
	public static $table	= 'assignment';
	public static $key		= 'assignment_id';

	public function assignment_file()
	{
		return $this->has_many('Assignmentfile', 'assignment_id');
	}

	public function classgroup()
	{
		return $this->belongs_to('Classgroup');
	}

	public function team()
	{
		return $this->has_many('Team', 'assignment_id');	
	}
}