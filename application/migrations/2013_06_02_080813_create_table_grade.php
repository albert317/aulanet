<?php

class Create_Table_Grade {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('grade', function($table){
			$table->engine = 'InnoDB';
			$table->increments('grade_id');
			$table->integer('group_student_id')->unsigned();
			$table->string('field',45);
			$table->decimal('value',6,4)->nullable();
			$table->decimal('weight',6,4)->nullable();
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
		Schema::drop('grade');
		//
	}

}
