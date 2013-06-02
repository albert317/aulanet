<?php

class Create_Table_Student_Activity {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('student_activity', function($table){
			$table->engine = 'InnoDB';
			$table->increments('student_activity_id');
			$table->integer('student_id')->unsigned();
			$table->string('title',45);
			$table->string('description',200)->nullable;
			$table->timestamp('start_time')->nullable;
			$table->timestamp('end_time')->nullable;
			$table->timestamps();
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
		Schema::drop('student_activity');
		//
	}

}