<?php
class Studentactivity extends Eloquent {
	public static $table	= 'student_activity';
	public static $key		= 'student_activity_id';

	public function student()
	{
		return $this->belongs_to('Student');
	}
}