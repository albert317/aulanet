<?php

class Create_Table_Student_Team {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('student_team', function($table){
			$table->engine = 'InnoDB';
			$table->integer('student_id')->unsigned();
			$table->integer('task_id')->unsigned();
			$table->timestamps();
			$table->primary(array('student_id','task_id'));
			$table->foreign('task_id')->references('task_id')->on('task');
			$table->foreign('student_id')->references('student_id')->on('student');
			
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
		Schema::drop('student_team');
		//
	}

}