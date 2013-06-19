<?php
class Teamfile extends Eloquent {
	public static $table	= 'teamfile';
	public static $key		= 'teamfile_id';

	public function team()
	{
		return $this->belongs_to('Team');
	}
}