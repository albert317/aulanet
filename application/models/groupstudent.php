<?php
class Groupstudent extends Eloquent {
	public static $table	= 'group_student';
	public static $key		= 'group_student_id';

	public function student()
	{
		return $this->belongs_to('Student');
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

	public function classgroup()
	{
		return $this->has_many_and_belongs_to('Classgroup', 'group_student');
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