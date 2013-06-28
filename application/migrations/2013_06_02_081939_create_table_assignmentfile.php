<?php

class Create_Table_Assignmentfile {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('assignmentfile', function($table){
			$table->engine = 'InnoDB';
			$table->increments('assignmentfile_id');
			$table->integer('assignment_id')->unsigned();
			$table->string('url',200);
			$table->string('title',45)->nullable();
			$table->string('description',200)->nullable();
			$table->timestamps();
			$table->foreign('assignment_id')->references('assignment_id')->on('assignment')->on_delete('cascade');
			
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
		Schema::drop('assignmentfile');
		//
	}

}