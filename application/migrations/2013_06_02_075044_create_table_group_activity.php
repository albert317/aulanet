<?php

class Create_Table_Group_Activity {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('group_activity', function($table){
			$table->engine = 'InnoDB';
			$table->increments('group_activity_id');
			$table->integer('classgroup_id')->unsigned();
			$table->string('title',45)->nullable();
			$table->string('description',120)->nullable();
			$table->timestamp('start_time')->nullable();
			$table->timestamp('end_time')->nullable();
			$table->enum('type',array('private','public'))->nullable();
			$table->timestamps();
			$table->foreign('classgroup_id')->references('classgroup_id')->on('classgroup');
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
		Schema::drop('group_activity');
		//
	}

}