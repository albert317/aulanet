<?php

class Create_Table_Team_Activity {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('team_activity', function($table){
			$table->engine = 'InnoDB';
			$table->increments('team_activity_id');
			$table->integer('team_id')->unsigned();
			$table->string('title',45);
			$table->string('description',200)->nullable;
			$table->timestamp('start_time')->nullable;
			$table->timestamp('end_time')->nullable;
			$table->timestamps();
			$table->foreign('team_id')->references('team_id')->on('team');
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
		Schema::drop('team_activity');
		//
	}

}