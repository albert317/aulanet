<?php

class Add_Users {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::table('user')->insert(array(
			'username'=>'admin',
			'password' => Hash::make('1234'),
			'type'=>'A',
			'names' => 'Direccion',
			'last_name1'=>'Academica',
			'created_at'=>date('Y-m-d H:m:s'),
			'updated_at'=>date('Y-m-d H:m:s')
		));

		DB::table('user')->insert(array(
			'username'=>'123456',
			'password'=>Hash::make('123'),
			'type'=>'T',
			'names' => 'GILBERTO ANIBAL',
			'last_name1'=>'SALINAS',
			'last_name2'=>'AZAÑA',
			'email'=>'gsalinasa@unmsm.edu.pe',
			'created_at'=>date('Y-m-d H:m:s'),
			'updated_at'=>date('Y-m-d H:m:s')
		));

		DB::table('user')->insert(array(
			'username'=>'987654',
			'password'=>Hash::make('456'),
			'type'=>'T',				
			'names' => 'ELIAS FELIX',
			'last_name1'=>'ARMAS',
			'last_name2'=>'GARCIA',
			'email'=>' 	earmasg@unmsm.edu.pe',			
			'created_at'=>date('Y-m-d H:m:s'),
			'updated_at'=>date('Y-m-d H:m:s')
		));
		
		DB::table('user')->insert(array(
			'username'=>'09200060',
			'password'=>Hash::make('147'),
			'type'=>'S',
			'names' => 'JOAN AXEL',
			'last_name1'=>'ODICIO',
			'last_name2'=>'VILCHEZ',
			'email'=>'09200060@unmsm.edu.pe',
			'created_at'=>date('Y-m-d H:m:s'),
			'updated_at'=>date('Y-m-d H:m:s')
		));
		
		DB::table('user')->insert(array(
			'username'=>'09200226',
			'password'=>Hash::make('258'),
			'type'=>'S',
			'names' => 'CESAR ALFREDO',
			'last_name1'=>'TARRILLO',
			'last_name2'=>'CELADA',
			'email'=>'09200226@unmsm.edu.pe',
			'created_at'=>date('Y-m-d H:m:s'),
			'updated_at'=>date('Y-m-d H:m:s')
		));

		DB::table('user')->insert(array(
			'username'=>'09200217',
			'password'=>Hash::make('369'),
			'type'=>'S',
			'names' => 'ALBERT JUAN',
			'last_name1'=>'MONTES',
			'last_name2'=>'ANCCASI',
			'email'=>'09200217@unmsm.edu.pe',	
			'created_at'=>date('Y-m-d H:m:s'),
			'updated_at'=>date('Y-m-d H:m:s')
		));
		
		DB::table('user')->insert(array(
			'username'=>'09200150',
			'password'=>Hash::make('asd'),
			'type'=>'S',
			'names' => ' LUIS FELIPE',
			'last_name1'=>'NATIVIDAD',
			'last_name2'=>'ALEJOS',
			'email'=>'09200150@unmsm.edu.pe',
			'created_at'=>date('Y-m-d H:m:s'),
			'updated_at'=>date('Y-m-d H:m:s')
		));
		
		DB::table('user')->insert(array(
			'username'=>'09200158',
			'password'=>Hash::make('qwe'),
			'type'=>'S',
			'names' => 'RICARDO',
			'last_name1'=>'TANAKA',
			'last_name2'=>'TERUKINA',
			'email'=>'09200158@unmsm.edu.pe',
			'created_at'=>date('Y-m-d H:m:s'),
			'updated_at'=>date('Y-m-d H:m:s')
		));

		DB::table('user')->insert(array(
			'username'=>'09200163',
			'password'=>Hash::make('890'),
			'type'=>'S',
			'names' => 'KATHERINE',
			'last_name1'=>'VELASQUEZ',
			'last_name2'=>'HINOSTROZA',
			'email'=>'09200163@unmsm.edu.pe',
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
		DB::table('user')->where('user_id', '=', 1)->delete();
		DB::table('user')->where('user_id', '=', 2)->delete();
		DB::table('user')->where('user_id', '=', 3)->delete();
		DB::table('user')->where('user_id', '=', 4)->delete();
		DB::table('user')->where('user_id', '=', 5)->delete();
		DB::table('user')->where('user_id', '=', 6)->delete();
		DB::table('user')->where('user_id', '=', 7)->delete();
		DB::table('user')->where('user_id', '=', 8)->delete();
		DB::table('user')->where('user_id', '=', 9)->delete();
		DB::query('ALTER TABLE user AUTO_INCREMENT = 1');
		//
	}

}