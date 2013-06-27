<?php

class Add_Course {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::table('course')->insert(array(
			'name'=>'Calculo II',
			'eap' => 'SW',
			'term' => '2',
			'created_at'=>date('Y-m-d H:m:s'),
			'updated_at'=>date('Y-m-d H:m:s')
		));

		DB::table('course')->insert(array(
			'name'=>'Programación II',
			'eap' => 'SW',
			'term' => '3',
			'created_at'=>date('Y-m-d H:m:s'),
			'updated_at'=>date('Y-m-d H:m:s')
		));
		DB::table('course')->insert(array(
			'name'=>'Calidad de Software',
			'eap' => 'SW',
			'term' => '8',
			'created_at'=>date('Y-m-d H:m:s'),
			'updated_at'=>date('Y-m-d H:m:s')
		));
		DB::table('course')->insert(array(
			'name'=>'Taller de Construcción de Software',
			'eap' => 'SW',
			'term' => '7',
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
		DB::table('course')->where('course_id', '=', 1)->delete();
		DB::table('course')->where('course_id', '=', 2)->delete();
		DB::table('course')->where('course_id', '=', 3)->delete();
		DB::table('course')->where('course_id', '=', 4)->delete();
		DB::query('ALTER TABLE course AUTO_INCREMENT = 1');

		//
	}

}