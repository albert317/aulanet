<?php

class Create_Table_Team {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('team', function($table){
			$table->engine = 'InnoDB';
			$table->increments('team_id');
			$table->integer('task_id')->unsigned();
			$table->string('name',45)->nullable();
			$table->string('description',250)->nullable();
			$table->timestamps();
			$table->foreign('task_id')->references('task_id')->on('task');
			
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
		Schema::drop('team');
		//
	}

}