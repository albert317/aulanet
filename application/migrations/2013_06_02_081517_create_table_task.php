<?php

class Create_Table_Task {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('assignment', function($table){
			$table->engine = 'InnoDB';
			$table->increments('assignment_id');
			$table->integer('group_id')->unsigned();
			$table->date('end_date')->nullable();
			$table->date('start_date')->nullable();
			$table->string('name',45)->nullable();
			$table->text('description')->nullable();
			$table->enum('type',array('G','S'))->nullable();
			$table->timestamps();
			$table->foreign('group_id')->references('group_id')->on('group');
			
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
		Schema::drop('task');
		//
	}

}