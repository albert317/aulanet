<?php
class Answer extends Eloquent {
	private static $table	= 'answer';
	private static $key		= 'answer_id';

	public function question()
	{
		return $this->belongs_to('Question');
	}

	public function student()
	{
		return $this->belongs_to('Student');
	}
}