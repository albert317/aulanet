<?php
class Course_Controller extends Base_Controller {

	/**
	* Muestra el listado de cursos disponibles
	* (No muestra la barra de navegacion)
	*/
	public function action_index()
	{
		return View::make('user.profile');
	}
	
	/**
	 * Muestra el listado de tareas pertenecientes al curso
	 */
	public function action_tasks()
	{
		return View::make('course.tasks');	
	}

	/**
	 * Muestra la asistencia relativa al curso
	 */
	public function action_attendance()
	{
		return View::make('course.attendance');
	}

	/**
	 * Muestra las notas relativas al curso
	 */
	public function action_grades()
	{
		return View::make('course.grades');
	}

	/**
	 * Muestra el foro del curso
	 */
	public function action_forum()
	{
		return View::make('course.forum');
	}
}