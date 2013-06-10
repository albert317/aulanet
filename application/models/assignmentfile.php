<?php
class Assignmentfile extends Eloquent {
	private static $table	= 'assignmentfile';
	private static $key		= 'assignment_id';

	public function team()
	{
		return $this->belongs_to('Team');
	}

	public function assignment()
	{
		return $this->belongs_to('Assignment');
	}
}