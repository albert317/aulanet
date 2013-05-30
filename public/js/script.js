function cargar_foro(){
	$('#contenido').empty();
	$('#contenido').load("foro");
	$('#foro').css('display','block');
	$('#agenda').css('display','none');
	$('#tareas').css('display','none');
	$('#notas').css('display','none');
	$('#asistencia').css('display','none');
}
function cargar_agenda(){
	$('#contenido').empty();
	$('#contenido').load("agenda");
	$('#foro').css('display','none');
	$('#agenda').css('display','block');
	$('#tareas').css('display','none');
	$('#notas').css('display','none');
	$('#asistencia').css('display','none');
}
function cargar_tareas(){
	$('#contenido').empty();
	$('#contenido').load("tareas");
	$('#foro').css('display','none');
	$('#agenda').css('display','none');
	$('#tareas').css('display','block');
	$('#notas').css('display','none');
	$('#asistencia').css('display','none');
}
function cargar_notas(){
	$('#contenido').empty();
	$('#contenido').load("notas");
	$('#foro').css('display','none');
	$('#agenda').css('display','none');
	$('#tareas').css('display','none');
	$('#notas').css('display','block');
	$('#asistencia').css('display','none');
}
function cargar_asistencia(){
	$('#contenido').empty();
	$('#contenido').load("asistencia");
	$('#foro').css('display','none');
	$('#agenda').css('display','none');
	$('#tareas').css('display','none');
	$('#notas').css('display','none');
	$('#asistencia').css('display','block');
}