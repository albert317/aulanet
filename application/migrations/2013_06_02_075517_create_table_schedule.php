<?php

class Create_Table_Schedule {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('schedule', function($table){
			$table->engine = 'InnoDB';
			$table->increments('schedule_id');
			$table->integer('group_id')->unsigned();
			$table->timestamp('start_time')->nullable();
			$table->timestamp('end_time')->nullable();
			$table->enum('day',array('LUNES','MARTES','MIÉRCOLES','JUEVES','VIERNES','SABADO','DOMINGO'))->nullable();
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
		Schema::drop('schedule');
		//
	}

}