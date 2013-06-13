<?php

class Add_Group {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::table('group')->insert(array(
			'professor_id'=>'1',
			'course_id' => '1',
			'name'=>'Grupo 1',
			'type'=>'P',
			'created_at'=>date('Y-m-d H:m:s'),
			'updated_at'=>date('Y-m-d H:m:s')
		));

		DB::table('group')->insert(array(
			'professor_id'=>'2',
			'course_id' => '2',
			'name'=>'Grupo 2',
			'type'=>'L',
			'created_at'=>date('Y-m-d H:m:s'),
			'updated_at'=>date('Y-m-d H:m:s')
		));
		DB::table('group')->insert(array(
			'professor_id'=>'2',
			'course_id' => '3',
			'name'=>'Grupo 1',
			'type'=>'T',
			'created_at'=>date('Y-m-d H:m:s'),
			'updated_at'=>date('Y-m-d H:m:s')
		));
		DB::table('group')->insert(array(
			'professor_id'=>'2',
			'course_id' => '4',
			'name'=>'Grupo 1',
			'type'=>'T',
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
		DB::table('group')->where('group_id', '=', 1)->delete();
		DB::table('group')->where('group_id', '=', 2)->delete();
		DB::table('group')->where('group_id', '=', 3)->delete();
		DB::table('group')->where('group_id', '=', 4)->delete();
		//DB::query('ALTER TABLE group DROP group_id');
		//DB::query('ALTER TABLE group AUTO_INCREMENT = 1');
		//DB::query('ALTER TABLE group ADD group_id int UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY FIRST');


		//
	}

}