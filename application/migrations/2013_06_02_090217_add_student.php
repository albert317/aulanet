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
			'names' => 'JOAN AXEL',
			'last_name1'=>'ODICIO',
			'last_name2'=>'VILCHEZ',
			'email'=>'09200060@unmsm.edu.pe',			
			'created_at'=>date('Y-m-d H:m:s'),
			'updated_at'=>date('Y-m-d H:m:s')
		));

		DB::table('student')->insert(array(
			'user_id'=>'5',
			'names' => 'CESAR ALFREDO',
			'last_name1'=>'TARRILLO',
			'last_name2'=>'CELADA',
			'email'=>'09200226@unmsm.edu.pe',			
			'created_at'=>date('Y-m-d H:m:s'),
			'updated_at'=>date('Y-m-d H:m:s')
		));
		
		DB::table('student')->insert(array(
			'user_id'=>'6',
			'names' => 'ALBERT JUAN',
			'last_name1'=>'MONTES',
			'last_name2'=>'ANCCASI',
			'email'=>'09200217@unmsm.edu.pe',			
			'created_at'=>date('Y-m-d H:m:s'),
			'updated_at'=>date('Y-m-d H:m:s')
		));
		
		DB::table('student')->insert(array(
			'user_id'=>'7',
			'names' => ' LUIS FELIPE',
			'last_name1'=>'NATIVIDAD',
			'last_name2'=>'ALEJOS',
			'email'=>'09200150@unmsm.edu.pe',			
			'created_at'=>date('Y-m-d H:m:s'),
			'updated_at'=>date('Y-m-d H:m:s')
		));
		
		DB::table('student')->insert(array(
			'user_id'=>'8',
			'names' => 'RICARDO',
			'last_name1'=>'TANAKA',
			'last_name2'=>'TERUKINA',
			'email'=>'09200158@unmsm.edu.pe',			
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