<?php
class Post extends Eloquent {
	private static $table	= 'post';
	private static $key		= 'post_id';

	public function group()
	{
		return $this->belongs_to('Group');
	}

	public function student()
	{
		return $this->belongs_to('Student');
	}

	public function professor()
	{
		return $this->belongs_to('Professor');
	}

	public function answers()
	{
		return $this->has_many('Post', 'answer_to');
	}
}