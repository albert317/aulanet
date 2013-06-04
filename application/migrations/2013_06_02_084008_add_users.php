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
			'username'=>'000',
			'password' => Hash::make('000'),
			'type'=>'A',
			'created_at'=>date('Y-m-d H:m:s'),
			'updated_at'=>date('Y-m-d H:m:s')
		));

		DB::table('user')->insert(array(
			'username'=>'987',
			'password'=>Hash::make('789'),
			'type'=>'T',
			'created_at'=>date('Y-m-d H:m:s'),
			'updated_at'=>date('Y-m-d H:m:s')
		));

		DB::table('user')->insert(array(
			'username'=>'654',
			'password'=>Hash::make('456'),
			'type'=>'T',
			'created_at'=>date('Y-m-d H:m:s'),
			'updated_at'=>date('Y-m-d H:m:s')
		));
		
		DB::table('user')->insert(array(
			'username'=>'321',
			'password'=>Hash::make('123'),
			'type'=>'S',
			'created_at'=>date('Y-m-d H:m:s'),
			'updated_at'=>date('Y-m-d H:m:s')
		));
		
		DB::table('user')->insert(array(
			'username'=>'ewq',
			'password'=>Hash::make('qwe'),
			'type'=>'S',
			'created_at'=>date('Y-m-d H:m:s'),
			'updated_at'=>date('Y-m-d H:m:s')
		));

		DB::table('user')->insert(array(
			'username'=>'cxz',
			'password'=>Hash::make('zxc'),
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
		
		//
	}

}