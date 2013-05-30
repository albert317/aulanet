<?php
class Student extends Eloquent {
	private static $table	= 'student';
	private static $key		= 'student_id';

	public function user()
	{
		return $this->has_one('User');
	}

	public function student_activity()
	{
		return $this->belongs_to('Student');
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

	public function answer()
	{
		return $this->has_many('Answer');
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