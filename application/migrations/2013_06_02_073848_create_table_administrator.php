<?php

class Create_Table_Administrator {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('administrator', function($table){
			$table->engine = 'InnoDB';
			$table->increments('administrator_id');
			$table->integer('user_id')->unsigned();
			$table->timestamps();
			$table->foreign('user_id')->references('user_id')->on('user')->on_delete('cascade');
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
		Schema::drop('administrator');
		//
	}

}