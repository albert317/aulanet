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
		DB::query('ALTER TABLE group AUTO_INCREMENT = 1');

		//
	}

}