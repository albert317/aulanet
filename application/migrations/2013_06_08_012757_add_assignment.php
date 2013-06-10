<?php

class Add_Assignment {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		DB::table('assignment')->insert(array(
			'group_id'=>'1',
			'end_date' => '2013-08-23',
			'start_date'=>'2013-07-13',
			'name'=>'La primera tarea Individual',
			'description'=>'Esta es la descripción primera tarea del curso',
			'type'=>'S',
			'created_at'=>date('Y-m-d H:m:s'),
			'updated_at'=>date('Y-m-d H:m:s')
		));
		DB::table('assignment')->insert(array(
			'group_id'=>'2',
			'end_date' => '2013-09-13',
			'start_date'=>'2013-08-11',
			'name'=>'La primera tarea grupal',
			'description'=>'Esta es la descripcion de la tarea del curso y es grupal',
			'type'=>'G',
			'created_at'=>date('Y-m-d H:m:s'),
			'updated_at'=>date('Y-m-d H:m:s')
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