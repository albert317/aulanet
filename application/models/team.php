<?php
class Team extends Eloquent {
	private static $table	= 'team';
	private static $key		= 'team_id';

	public function task()
	{
		return $this->belongs_to('Task');
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