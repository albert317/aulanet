<?php

class Add_Team {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::table('team')->insert(array(
			'team_id'=>'1',
			'assignment_id'=>'1',
			'name'=>'Promo 2030',
			'description'=>'Los inmortales',
			'created_at'=>date('Y-m-d H:m:s'),
			'updated_at'=>date('Y-m-d H:m:s')
		));
		DB::table('team')->insert(array(
			'team_id'=>'2',
			'assignment_id'=>'2',
			'name'=>'Taller 2016-I',
			'description'=>'',
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