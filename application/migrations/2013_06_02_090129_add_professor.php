<?php

class Add_Professor {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{		
		DB::table('professor')->insert(array(
			'user_id'=>'2',			
			'created_at'=>date('Y-m-d H:m:s'),
			'updated_at'=>date('Y-m-d H:m:s')
		));		

		DB::table('professor')->insert(array(
			'user_id'=>'3',			
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
		DB::table('professor')->where('professor_id', '=', 2)->delete();
		DB::table('professor')->where('professor_id', '=', 3)->delete();
		DB::query('ALTER TABLE professor AUTO_INCREMENT = 1');

		//
	}

}