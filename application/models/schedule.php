<?php
class Shedule extends Eloquent {
	private static $table	= 'shedule';
	private static $key		= 'shedule_id';

	public function classgroup()
	{
		return $this->belongs_to('Classgroup');
	}
}