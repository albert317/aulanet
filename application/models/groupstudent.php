<?php
class Groupstudent extends Eloquent {
	public static $table	= 'student';
	public static $key		= 'student_id';

	public function user()
	{
		return $this->belongs_to('User');
	}

	public function studentactivity()
	{
		return $this->has_many('Studentactivity', 'student_id', 'group_activity_id');
	}

	public function delegate_of()
	{
		return $this->has_many('team');
	}

	public function team()
	{
		return $this->has_many_and_belongs_to('Team', 'student_team');
	}

	public function group()
	{
		return $this->has_many_and_belongs_to('Group', 'group_student');
	}
	public function score()
	{
		return $this->has_many('Score');
	}

	public function post()
	{
		return $this->has_many('Post');
	}
}