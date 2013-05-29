<?php
class Task extends Eloquent {
	private static $table	= 'task';
	private static $key		= 'task_id';

	public function task_file()
	{
		return $this->has_many('Taskfile');
	}

	public function group()
	{
		return $this->belongs_to('Group');
	}

	public function team()
	{
		return $this->has_many('Team');	
	}
}