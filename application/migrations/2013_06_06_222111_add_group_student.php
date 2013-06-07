<?php

class Add_Group_Student {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::table('group_student')->insert(array(
			'group_id'=>'1',
			'student_id' => '2',
			'created_at'=>date('Y-m-d H:m:s'),
			'updated_at'=>date('Y-m-d H:m:s')
		));

		DB::table('group_student')->insert(array(
			'group_id'=>'2',
			'student_id' => '2',
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
		DB::table('group_student')->where('group_student_id', '=', 1)->delete();
		DB::table('group_student')->where('group_student_id', '=', 2)->delete();
		DB::query('ALTER TABLE group_student AUTO_INCREMENT = 1');

		//
	}

}