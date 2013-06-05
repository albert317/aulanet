<?php
class Course extends Eloquent {
	private static $table	= 'course';
	private static $key		= 'course_id';

	public function group()
	{
		return $this->has_many('Group');
	}
}