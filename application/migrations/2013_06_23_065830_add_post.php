<?php

class Add_Post {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		DB::table('post')->insert( array(
			'classgroup_id'	=> '1',
			'student_id'	=> null,
			'professor_id'	=> '1',
			'answer_to'		=> null,
			'title'			=> 'Primera Pregunta',
			'text'			=> 'Texto contenido de la primera pregunta Texto contenido de la primera pregunta',
			'type'			=> 'PREGUNTA',
			'checked'		=> '0',
			'created_at'	=> date('Y-m-d H:m:s'),
			'updated_at'	=> date('Y-m-d H:m:s')
		));

		DB::table('post')->insert( array(
			'classgroup_id'	=> '1',
			'student_id'	=> '2',
			'professor_id'	=> null,
			'answer_to'		=> null,
			'title'			=> 'Primer Post de alumno',
			'text'			=> 'Texto del Primer Post de alumno Texto del Primer Post de alumno',
			'type'			=> 'POST',
			'checked'		=> '0',
			'created_at'	=> date('Y-m-d H:m:s'),
			'updated_at'	=> date('Y-m-d H:m:s')
		));

		DB::table('post')->insert( array(
			'classgroup_id'	=> '1',
			'student_id'	=> '2',
			'professor_id'	=> null,
			'answer_to'		=> null,
			'title'			=> 'Segundo Post de alumno',
			'text'			=> 'Texto del Segundo Post de alumno Texto del Segundo Post de alumno',
			'type'			=> 'POST',
			'checked'		=> '0',
			'created_at'	=> date('Y-m-d H:m:s'),
			'updated_at'	=> date('Y-m-d H:m:s')
		));

		DB::table('post')->insert( array(
			'classgroup_id'	=> '1',
			'student_id'	=> '2',
			'professor_id'	=> null,
			'answer_to'		=> '3',
			'title'			=> 'Respuesta primer Post de alumno',
			'text'			=> 'Contenido de la respuesta al PRIMER POST',
			'type'			=> 'POST',
			'checked'		=> '0',
			'created_at'	=> date('Y-m-d H:m:s'),
			'updated_at'	=> date('Y-m-d H:m:s')
		));
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}