<?php
class Score extends Eloquent {
	private static $table	= 'score';
	private static $key		= 'score_id';

	public function group()
	{
		return $this->belongs_to('Group');
	}

	public function student()
	{
		return $this->belongs_to('Student');
	}
}