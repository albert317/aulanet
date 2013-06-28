<?php

class Create_Table_Post {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('post', function($table){
			$table->engine = 'InnoDB';
			$table->increments('post_id');
			$table->integer('classgroup_id')->unsigned();
			$table->integer('student_id')->unsigned()->nullable();
			$table->integer('professor_id')->unsigned()->nullable();
			$table->integer('answer_to')->unsigned()->nullable();
			$table->string('title',150)->nullable();
			$table->text('text')->nullable();
			$table->enum('type',array('POST','ENLACE','PREGUNTA'))->nullable();
			$table->integer('checked')->nullable();
			$table->timestamps();
			$table->foreign('classgroup_id')->references('classgroup_id')->on('classgroup')->on_delete('cascade');
			$table->foreign('student_id')->references('student_id')->on('student')->on_delete('cascade');
			$table->foreign('professor_id')->references('professor_id')->on('professor')->on_delete('cascade');
			$table->foreign('answer_to')->references('post_id')->on('post')->on_delete('cascade');
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
		Schema::drop('post');
		//
	}

}