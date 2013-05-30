<?php
class Teamfile extends Eloquent {
	private static $table	= 'teamfile';
	private static $key		= 'teamfile_id';

	public function team()
	{
		return $this->belongs_to('Team');
	}
}