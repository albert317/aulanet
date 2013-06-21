<?php
class Administrador_Controller extends Base_Controller {

	/**
	* Muestra el listado de cursos disponibles
	* (No muestra la barra de navegacion)
	*/
	public function action_index(){
		$current_user = Auth::user();
		if($current_user->type=='A'){
			return View::make('administrator.profile');
		}
		else{				
			return Redirect::to('cursos');
		}
		
	}
}