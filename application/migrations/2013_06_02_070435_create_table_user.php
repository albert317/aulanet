<?php

class Create_Table_User {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user', function($table){
			$table->engine = 'InnoDB';
			$table->increments('user_id');
			$table->string('username',10);
			$table->string('password',64);
			$table->enum('type' ,array('A','T','S'));
			$table->timestamps();
		});
		//
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('user');
		//
	}

}