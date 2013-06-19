<?php
class Groupactivity extends Eloquent {
	private static $table	= 'group_activity';
	private static $key		= 'group_activity_id';

	public function classgroup()
	{
		return $this->belongs_to('Classgroup');
	}
}