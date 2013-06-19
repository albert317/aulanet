<?php
class Score extends Eloquent {
	private static $table	= 'score';
	private static $key		= 'score_id';

	public function classgroup()
	{
		return $this->belongs_to('Classgroup');
	}

	public function student()
	{
		return $this->belongs_to('Student');
	}
}