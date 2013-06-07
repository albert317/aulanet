<?php

class Create_Table_Group_Student {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('group_student', function($table){
			$table->engine = 'InnoDB';
			//$table->increments('group_student_id');
			$table->increments('id');
			$table->integer('group_id')->unsigned();
			$table->integer('student_id')->unsigned();
			$table->timestamps();
			$table->foreign('group_id')->references('group_id')->on('group');
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
		Schema::drop('group_student');
		//
	}

}