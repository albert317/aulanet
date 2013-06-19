<?php
class Post extends Eloquent {
	private static $table	= 'post';
	private static $key		= 'post_id';

	public function classgroup()
	{
		return $this->belongs_to('Classgroup');
	}

	public function student()
	{
		return $this->belongs_to('Student');
	}

	public function professor()
	{
		return $this->belongs_to('Professor');
	}

	public function answer()
	{
		return $this->has_many('Post','answer_to');
	}



}