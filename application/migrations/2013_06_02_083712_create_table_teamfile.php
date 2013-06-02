<?php

class Create_Table_Teamfile {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('teamfile', function($table){
			$table->engine = 'InnoDB';
			$table->increments('teamfile_id');
			$table->integer('team_id')->unsigned();
			$table->string('url',200);
			$table->string('title',45)->nullable();
			$table->string('description',200)->nullable();
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
		Schema::drop('teamfile');
		//
	}

}