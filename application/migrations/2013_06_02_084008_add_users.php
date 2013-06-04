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
			'created_at'=>date('Y-m-d H:m:s'),
			'updated_at'=>date('Y-m-d H:m:s')
		));

		DB::table('user')->insert(array(
			'username'=>'123456',
			'password'=>Hash::make('123'),
			'type'=>'T',
			'created_at'=>date('Y-m-d H:m:s'),
			'updated_at'=>date('Y-m-d H:m:s')
		));

		DB::table('user')->insert(array(
			'username'=>'987654',
			'password'=>Hash::make('456'),
			'type'=>'T',
			'created_at'=>date('Y-m-d H:m:s'),
			'updated_at'=>date('Y-m-d H:m:s')
		));
		
		DB::table('user')->insert(array(
			'username'=>'09200060',
			'password'=>Hash::make('147'),
			'type'=>'S',
			'created_at'=>date('Y-m-d H:m:s'),
			'updated_at'=>date('Y-m-d H:m:s')
		));
		
		DB::table('user')->insert(array(
			'username'=>'09200226',
			'password'=>Hash::make('258'),
			'type'=>'S',
			'created_at'=>date('Y-m-d H:m:s'),
			'updated_at'=>date('Y-m-d H:m:s')
		));

		DB::table('user')->insert(array(
			'username'=>'09200217',
			'password'=>Hash::make('369'),
			'type'=>'S',
			'created_at'=>date('Y-m-d H:m:s'),
			'updated_at'=>date('Y-m-d H:m:s')
		));
		
		DB::table('user')->insert(array(
			'username'=>'09200150',
			'password'=>Hash::make('asd'),
			'type'=>'S',
			'created_at'=>date('Y-m-d H:m:s'),
			'updated_at'=>date('Y-m-d H:m:s')
		));
		
		DB::table('user')->insert(array(
			'username'=>'09200158',
			'password'=>Hash::make('qwe'),
			'type'=>'S',
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
		DB::query('ALTER TABLE user AUTO_INCREMENT = 1');
		//
	}

}