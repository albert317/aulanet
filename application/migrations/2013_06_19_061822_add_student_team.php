<?php

class Add_Student_Team {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::table('student_team')->insert(array(
			'student_id'=>'1',
			'team_id' => '1',
			'created_at'=>date('Y-m-d H:m:s'),
			'updated_at'=>date('Y-m-d H:m:s')
		));
		DB::table('student_team')->insert(array(
			'student_id'=>'2',
			'team_id' => '1',
			'created_at'=>date('Y-m-d H:m:s'),
			'updated_at'=>date('Y-m-d H:m:s')
		));
		DB::table('student_team')->insert(array(
			'student_id'=>'3',
			'team_id' => '1',
			'created_at'=>date('Y-m-d H:m:s'),
			'updated_at'=>date('Y-m-d H:m:s')
		));
		DB::table('student_team')->insert(array(
			'student_id'=>'4',
			'team_id' => '3',
			'created_at'=>date('Y-m-d H:m:s'),
			'updated_at'=>date('Y-m-d H:m:s')
		));
		DB::table('student_team')->insert(array(
			'student_id'=>'5',
			'team_id' => '4',
			'created_at'=>date('Y-m-d H:m:s'),
			'updated_at'=>date('Y-m-d H:m:s')
		));
		//
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}