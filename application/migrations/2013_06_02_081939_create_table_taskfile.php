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
			$table->increments('taskfile_id');
			$table->integer('task_id')->unsigned();
			$table->string('url',200);
			$table->string('title',45)->nullable();
			$table->string('description',200)->nullable();
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
		Schema::drop('taskfile');
		//
	}

}