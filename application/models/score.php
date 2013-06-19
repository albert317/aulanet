<?php
class Score extends Eloquent {
	public static $table	= 'score';
	public static $key		= 'score_id';

	public function classgroup()
	{
		return $this->belongs_to('Classgroup');
	}

	public function student()
	{
		return $this->belongs_to('Student');
	}
}