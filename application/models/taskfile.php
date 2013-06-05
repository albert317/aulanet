<?php
class Taskfile extends Eloquent {
	private static $table	= 'taskfile';
	private static $key		= 'taskfile_id';

	public function team()
	{
		return $this->belongs_to('Team');
	}
}