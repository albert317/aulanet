<?php
class Team extends Eloquent {
	public static $table	= 'team';
	public static $key		= 'team_id';

	public function assignment()
	{
		return $this->belongs_to('Assignment');
	}

	public function teamfile()
	{
		return $this->has_many('Teamfile');
	}

	public function student()
	{
		return $this->has_many_and_belongs_to('Student', 'student_team');
	}

	public function teamactivity()
	{
		return $this->has_many('teamactivity');
	}
}