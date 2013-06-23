<?php
class Classgroup extends Eloquent {
	public static $table	= 'classgroup';
	public static $key		= 'classgroup_id';

	public function course()
	{
		return $this->belongs_to('Course');
	}

	public function student()
	{
		return $this->has_many_and_belongs_to('Student', 'group_student');
	}

	public function groupactivity()
	{
		return $this->has_many('Groupactivity');
	}

	public function post()
	{
		return $this->has_many('Post');
	}

	public function professor()
	{
		return $this->belongs_to('Professor');
	}

	public function score()
	{
		return $this->has_many('Score');
	}

	public function schedule()
	{
		return $this->has_many('Schedule');
	}

	public function assignment()
	{
		return $this->has_many('Assignment', 'classgroup_id');
	}

	public static function students($group_id)
	{
		$students = 	DB::query("	SELECT 	student.student_id, user.last_name1, user.last_name2, user.names 
									FROM 	group_student, student, user
									WHERE	group_student.classgroup_id = $group_id
									AND		group_student.student_id = student.student_id
									AND		user.user_id = student.user_id
									ORDER BY user.last_name1, user.last_name2"
								);
		return $students;

	}

}