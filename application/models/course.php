<?php
class Course extends Eloquent {
	public static $table	= 'course';
	public static $key		= 'course_id';

	public function classgroup()
	{
		return $this->has_many('Classgroup', 'course_id');
	}
}