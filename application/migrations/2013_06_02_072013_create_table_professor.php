<?php

class Create_Table_Professor {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{

		Schema::create('professor', function($table){
			$table->engine = 'InnoDB';
			$table->increments('professor_id');
			$table->integer('user_id')->unsigned();
			$table->timestamps();
			$table->foreign('user_id')->references('user_id')->on('user');
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
		Schema::drop('professor');
		//
	}

}