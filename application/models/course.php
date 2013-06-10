<?php
class Course extends Eloquent {
	public static $table	= 'course';
	public static $key		= 'course_id';

	public function group()
	{
		return $this->has_many('Group', 'course_id');
	}
}