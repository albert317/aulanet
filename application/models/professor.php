<?php
class Professor extends Eloquent {
	public static $table	= 'professor';
	public static $key		= 'professor_id';

	public function user()
	{
		return $this->belongs_to('User');
	}

	public function post()
	{
		return $this->has_many('Post');
	}

	public function classgroup()
	{
		return $this->has_many("Classgroup","professor_id");
	}
}