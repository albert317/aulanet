<?php
class Shedule extends Eloquent {
	private static $table	= 'shedule';
	private static $key		= 'shedule_id';

	public function group()
	{
		return $this->belongs_to('Group');
	}
}