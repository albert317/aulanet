<?php
class Grade extends Eloquent {
	private static $table	= 'grade';
	private static $key		= 'grade_id';

	public function group_student()
	{
		return $this->belongs_to('group_student');
	}
}