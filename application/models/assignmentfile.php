<?php
class Assignmentfile extends Eloquent {
	public static $table	= 'assignmentfile';
	public static $key		= 'assignment_id';

	public function team()
	{
		return $this->belongs_to('Team');
	}

	public function assignment()
	{
		return $this->belongs_to('Assignment');
	}
}