<?php
class Teamactivity extends Eloquent {
	private static $table	= 'team_activity';
	private static $key		= 'team_activity_id';

	public function team()
	{
		return $this->belongs_to('Team');
	}
}