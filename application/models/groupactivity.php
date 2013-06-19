<?php
class Groupactivity extends Eloquent {
	public static $table	= 'group_activity';
	public static $key		= 'group_activity_id';

	public function classgroup()
	{
		return $this->belongs_to('Classgroup');
	}
}