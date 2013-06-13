<?php
class Professor extends Eloquent {
	private static $table	= 'professor';
	private static $key		= 'professor_id';

	public function user()
	{
		return $this->belongs_to('User');
	}

	public function post()
	{
		return $this->has_many('Post');
	}

	public function group()
	{
		return $this->has_many("Group","professor_id");
	}
}