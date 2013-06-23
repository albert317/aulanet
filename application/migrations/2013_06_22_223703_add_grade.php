<?php

class Add_Grade {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{

		DB::table('grade')->insert(array(
			'group_student_id'=>'1',
			'field' => 'nota1',
			'value'=>'15',
			'weight' => '0.1',
			'created_at'=>date('Y-m-d H:m:s'),
			'updated_at'=>date('Y-m-d H:m:s')
		));

		DB::table('grade')->insert(array(
			'group_student_id'=>'2',
			'field' => 'nota1',
			'value'=>'16',
			'weight' => '0.1',
			'created_at'=>date('Y-m-d H:m:s'),
			'updated_at'=>date('Y-m-d H:m:s')
		));

		DB::table('grade')->insert(array(
			'group_student_id'=>'3',
			'field' => 'nota1',
			'value'=>'17',
			'weight' => '0.1',
			'created_at'=>date('Y-m-d H:m:s'),
			'updated_at'=>date('Y-m-d H:m:s')
		));

		DB::table('grade')->insert(array(
			'group_student_id'=>'4',
			'field' => 'nota1',
			'value'=>'12',
			'weight' => '0.1',
			'created_at'=>date('Y-m-d H:m:s'),
			'updated_at'=>date('Y-m-d H:m:s')
		));



		DB::table('grade')->insert(array(
			'group_student_id'=>'1',
			'field' => 'nota2',
			'value'=>'12',
			'weight' => '0.1',
			'created_at'=>date('Y-m-d H:m:s'),
			'updated_at'=>date('Y-m-d H:m:s')
		));

		DB::table('grade')->insert(array(
			'group_student_id'=>'2',
			'field' => 'nota2',
			'value'=>'14',
			'weight' => '0.1',
			'created_at'=>date('Y-m-d H:m:s'),
			'updated_at'=>date('Y-m-d H:m:s')
		));

		DB::table('grade')->insert(array(
			'group_student_id'=>'3',
			'field' => 'nota2',
			'value'=>'13',
			'weight' => '0.1',
			'created_at'=>date('Y-m-d H:m:s'),
			'updated_at'=>date('Y-m-d H:m:s')
		));

		DB::table('grade')->insert(array(
			'group_student_id'=>'4',
			'field' => 'nota2',
			'value'=>'15',
			'weight' => '0.1',
			'created_at'=>date('Y-m-d H:m:s'),
			'updated_at'=>date('Y-m-d H:m:s')
		));
		//
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