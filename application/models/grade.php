<?php
class Grade extends Eloquent {
	public static $table	= 'grade';
	public static $key		= 'grade_id';

	public function group_student()
	{
		return $this->belongs_to('group_student',"group_student_id");
	}
}