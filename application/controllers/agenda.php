<?php
class Agenda_Controller extends Base_Controller {

	/**
	 * Muestra la agenda
	 */
	public function action_index()
	{
		return View::make('course.agenda');
	}
}