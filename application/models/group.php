<?php
class Group extends Eloquent {
	public static $table	= 'group';
	public static $key		= 'group_id';

	public function course()
	{
		return $this->belongs_to('Course');
	}

	public function student()
	{
		return $this->has_many_and_belongs_to('Student', 'group_student');
	}

	public function groupactivity()
	{
		return $this->has_many('Groupactivity');
	}

	public function post()
	{
		return $this->has_many('Post');
	}

	public function professor()
	{
		return $this->belongs_to('Professor');
	}

	public function score()
	{
		return $this->has_many('Score');
	}

	public function schedule()
	{
		return $this->has_many('Schedule');
	}

	public function task()
	{
		return $this->has_many('Task');
	}

}