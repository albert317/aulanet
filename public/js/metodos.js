$(document).ready(function () {  
    $('.dropdown-toggle').dropdown(); 
    console.log("drop");
}); 
function cargar_tarea(){
	$('#tareas').load("prueba");
	console.log("prueba");
}
