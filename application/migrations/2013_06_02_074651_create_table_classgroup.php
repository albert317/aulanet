<?php

class Create_Table_Classgroup {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('classgroup', function($table){
			$table->engine = 'InnoDB';
			$table->increments('classgroup_id');
			$table->integer('course_id')->unsigned();
			$table->integer('professor_id')->unsigned();
			$table->string('name',50);
			$table->enum('type',array('T','P','L'))->nullable();
			$table->timestamps();
			$table->foreign('course_id')->references('course_id')->on('course')->on_delete('cascade');
			$table->foreign('professor_id')->references('professor_id')->on('professor')->on_delete('cascade');
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
		Schema::drop('group');
		//
	}

}