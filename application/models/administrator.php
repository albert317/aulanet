<?php
class Administrator extends Eloquent {
	public static $table	= 'administrator';
	public static $key		= 'administrator_id';

	public function user()
	{
		return $this->has_one('User');
	}
}