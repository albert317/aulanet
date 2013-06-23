<?php

class Add_Attendance {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{

		DB::table('attendance')->insert(array(
			'group_student_id'=>'1',
			'date' => '2013-06-08',
			'type'=>'A',
			'created_at'=>date('Y-m-d H:m:s'),
			'updated_at'=>date('Y-m-d H:m:s')
		));

		DB::table('attendance')->insert(array(
			'group_student_id'=>'2',
			'date' => '2013-06-08',
			'type'=>'F',
			'created_at'=>date('Y-m-d H:m:s'),
			'updated_at'=>date('Y-m-d H:m:s')
		));

		DB::table('attendance')->insert(array(
			'group_student_id'=>'3',
			'date' => '2013-06-08',
			'type'=>'A',
			'created_at'=>date('Y-m-d H:m:s'),
			'updated_at'=>date('Y-m-d H:m:s')
		));

		DB::table('attendance')->insert(array(
			'group_student_id'=>'4',
			'date' => '2013-06-08',
			'type'=>'A',
			'created_at'=>date('Y-m-d H:m:s'),
			'updated_at'=>date('Y-m-d H:m:s')
		));

		DB::table('attendance')->insert(array(
			'group_student_id'=>'1',
			'date' => '2013-06-15',
			'type'=>'F',
			'created_at'=>date('Y-m-d H:m:s'),
			'updated_at'=>date('Y-m-d H:m:s')
		));

		DB::table('attendance')->insert(array(
			'group_student_id'=>'2',
			'date' => '2013-06-15',
			'type'=>'F',
			'created_at'=>date('Y-m-d H:m:s'),
			'updated_at'=>date('Y-m-d H:m:s')
		));

		DB::table('attendance')->insert(array(
			'group_student_id'=>'3',
			'date' => '2013-06-15',
			'type'=>'A',
			'created_at'=>date('Y-m-d H:m:s'),
			'updated_at'=>date('Y-m-d H:m:s')
		));

		DB::table('attendance')->insert(array(
			'group_student_id'=>'4',
			'date' => '2013-06-15',
			'type'=>'A',
			'created_at'=>date('Y-m-d H:m:s'),
			'updated_at'=>date('Y-m-d H:m:s')
		));
		


		DB::table('attendance')->insert(array(
			'group_student_id'=>'1',
			'date' => date('Y-m-d'),
			'type'=>'A',
			'created_at'=>date('Y-m-d H:m:s'),
			'updated_at'=>date('Y-m-d H:m:s')
		));

		DB::table('attendance')->insert(array(
			'group_student_id'=>'2',
			'date' => date('Y-m-d'),
			'type'=>'A',
			'created_at'=>date('Y-m-d H:m:s'),
			'updated_at'=>date('Y-m-d H:m:s')
		));

		DB::table('attendance')->insert(array(
			'group_student_id'=>'3',
			'date' => date('Y-m-d'),
			'type'=>'A',
			'created_at'=>date('Y-m-d H:m:s'),
			'updated_at'=>date('Y-m-d H:m:s')
		));

		DB::table('attendance')->insert(array(
			'group_student_id'=>'4',
			'date' => date('Y-m-d'),
			'type'=>'F',
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