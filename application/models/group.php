<?php
class Group extends Eloquent {
	private static $table	= 'group';
	private static $key		= 'group_id';

	public function course()
	{
		return $this->belongs_to('Course');
	}

	public function groupactivity()
	{
		return $this->has_many('Groupactivity');
	}

	public function schedule()
	{
		return $this->has_many('Schedule');
	}

	public function task()
	{
		return $this->has_many('Task');
	}

	public function student()
	{
		return $this->has_many_and_belongs_to('Student', 'group_student');
	}

	public function professor()
	{
		return $this->belongs_to('Professor');
	}

	public function question()
	{
		return $this->has_many('Question');
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