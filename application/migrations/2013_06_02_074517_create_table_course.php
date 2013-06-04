<?php

class Create_Table_Course {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('course', function($table){
			$table->engine = 'InnoDB';
			$table->increments('course_id');
			$table->string('name',45);
			$table->enum('eap',array('SI','SW'));
			$table->string('syllabus',200)->nullable();
			$table->timestamps();
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
		Schema::drop('course');
		//
	}

}