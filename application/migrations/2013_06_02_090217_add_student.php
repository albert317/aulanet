<?php

class Add_Student {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::table('student')->insert(array(
			'user_id'=>'4',					
			'created_at'=>date('Y-m-d H:m:s'),
			'updated_at'=>date('Y-m-d H:m:s')
		));

		DB::table('student')->insert(array(
			'user_id'=>'5',						
			'created_at'=>date('Y-m-d H:m:s'),
			'updated_at'=>date('Y-m-d H:m:s')
		));
		
		DB::table('student')->insert(array(
			'user_id'=>'6',					
			'created_at'=>date('Y-m-d H:m:s'),
			'updated_at'=>date('Y-m-d H:m:s')
		));
		
		DB::table('student')->insert(array(
			'user_id'=>'7',			
			'created_at'=>date('Y-m-d H:m:s'),
			'updated_at'=>date('Y-m-d H:m:s')
		));
		
		DB::table('student')->insert(array(
			'user_id'=>'8',			
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
		DB::table('student')->where('student_id', '=', 1)->delete();
		DB::table('student')->where('student_id', '=', 2)->delete();
		DB::table('student')->where('student_id', '=', 3)->delete();
		DB::table('student')->where('student_id', '=', 4)->delete();
		DB::table('student')->where('student_id', '=', 5)->delete();
		DB::query('ALTER TABLE student AUTO_INCREMENT = 1');


		//
	}

}