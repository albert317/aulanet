<?php

class Create_Table_Attendance {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('attendance', function($table){
			$table->engine = 'InnoDB';
			$table->increments('attendance_id');
			$table->integer('group_student_id')->unsigned();
			$table->date('date');
			$table->enum('type',array('A','F','T'));
			$table->timestamps();
			//$table->foreign('group_student_id')->references('group_student_id')->on('group_student');
			$table->foreign('group_student_id')->references('id')->on('group_student')->on_delete('cascade');
			
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
		Schema::drop('attendance');
		//
	}

}