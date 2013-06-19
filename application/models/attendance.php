<?php
class Attendance extends Eloquent {
	public static $table	= 'attendance';
	public static $key		= 'attendance_id';

	public function group_student()
	{
		return $this->belongs_to('group_student', 'group_student_id');
	}
}