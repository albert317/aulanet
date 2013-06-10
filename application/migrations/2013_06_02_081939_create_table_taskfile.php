<?php

class Create_Table_Taskfile {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('taskfile', function($table){
			$table->engine = 'InnoDB';
			$table->increments('assignment_id');
			$table->integer('task_id')->unsigned();
			$table->string('url',200);
			$table->string('title',45)->nullable();
			$table->string('description',200)->nullable();
			$table->timestamps();
			$table->foreign('assignment_id')->references('assignment_id')->on('assignment');
			
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
		Schema::drop('taskfile');
		//
	}

}