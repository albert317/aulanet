<?php
class Course_Controller extends Base_Controller {

	/**
	* Muestra el listado de cursos disponibles
	* (No muestra la barra de navegacion)
	*/
	public function action_index()
	{
		//Muestra lista de cursos y datos
		//Sin navegavilidad de tareas, foro ,etc
		echo "CURSOS";
	}
	
	/**
	 * Muestra el listado de tareas pertenecientes al curso
	 */
	public function action_tasks()
	{
		
	}

	/**
	 * Muestra la asistencia relativa al curso
	 */
	public function action_attendance()
	{
		
	}

	/**
	 * Muestra las notas relativas al curso
	 */
	public function action_grades()
	{
		
	}

	/**
	 * Muestra el foro del curso
	 */
	public function action_forum()
	{

	}
}