<?php
class Shedule extends Eloquent {
	public static $table	= 'shedule';
	public static $key		= 'shedule_id';

	public function classgroup()
	{
		return $this->belongs_to('Classgroup');
	}
}