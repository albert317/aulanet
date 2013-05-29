<?php
class Student_activity extends Eloquent {
	private static $table	= 'student_activity';
	private static $key		= 'student_activity_id';

	public function student()
	{
		return $this->belongs_to('Student');
	}
}