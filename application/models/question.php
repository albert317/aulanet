<?php
class Question extends Eloquent {
	private static $table	= 'question';
	private static $key		= 'question_id';

	public function answer()
	{
		return $this->has_many('Answer');
	}

	public function group()
	{
		return $this->belongs_to('Group');
	}
}