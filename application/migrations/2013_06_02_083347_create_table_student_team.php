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
			$table->increments('id');
			$table->integer('student_id')->unsigned();
			$table->integer('team_id')->unsigned();
			$table->timestamps();
			//$table->primary(array('student_id','team_id'));
			$table->foreign('team_id')->references('team_id')->on('team')->on_delete('cascade');
			$table->foreign('student_id')->references('student_id')->on('student')->on_delete('cascade');
			
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