<?php
class Teamactivity extends Eloquent {
	public static $table	= 'team_activity';
	public static $key		= 'team_activity_id';

	public function team()
	{
		return $this->belongs_to('Team');
	}
}