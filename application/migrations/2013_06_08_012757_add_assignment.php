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
			'classgroup_id'=>'1',
			'end_date' => '2013-08-23',
			'start_date'=>'2013-07-13',
			'name'=>'La primera tarea Individual',
			'description'=>'Esta es la descripción primera tarea del curso',
			'type'=>'S',
			'created_at'=>date('Y-m-d H:m:s'),
			'updated_at'=>date('Y-m-d H:m:s')
		));
		DB::table('assignment')->insert(array(
			'classgroup_id'=>'2',
			'end_date' => '2013-09-13',
			'start_date'=>'2013-08-11',
			'name'=>'La primera tarea grupal',
			'description'=>'Esta es la descripcion de la tarea del curso y es grupal',
			'type'=>'G',
			'created_at'=>date('Y-m-d H:m:s'),
			'updated_at'=>date('Y-m-d H:m:s')
		));
		DB::table('assignment')->insert(array(
			'classgroup_id'=>'3',
			'end_date' => '2013-08-23',
			'start_date'=>'2013-07-13',
			'name'=>'tarea semanal de calidad',
			'description'=>'deben presentar las ppt de las paginas web',
			'type'=>'S',
			'created_at'=>date('Y-m-d H:m:s'),
			'updated_at'=>date('Y-m-d H:m:s')
		));
		DB::table('assignment')->insert(array(
			'classgroup_id'=>'4',
			'end_date' => '2013-09-13',
			'start_date'=>'2013-08-11',
			'name'=>'tarea mensual del calidad',
			'description'=>'Esta tarea la deberan presentar cada fin de mes',
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
		DB::table('assignment')->where('assignment_id', '=', 1)->delete();
		DB::table('assignment')->where('assignment_id', '=', 2)->delete();
		DB::query('ALTER TABLE assignment AUTO_INCREMENT = 1');
		//
	}

}