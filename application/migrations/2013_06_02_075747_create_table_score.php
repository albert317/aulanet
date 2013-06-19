<?php

class Create_Table_Score {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('score', function($table){
			$table->engine = 'InnoDB';
			$table->increments('score_id');
			$table->integer('student_id')->unsigned();
			$table->integer('classgroup_id')->unsigned();
			$table->integer('value')->nullable();
			$table->timestamps();
			$table->foreign('classgroup_id')->references('classgroup_id')->on('classgroup');
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
		Schema::drop('score');
		//
	}

}