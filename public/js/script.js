function cargar_foro(){
	$('#foro').empty();
	$('#foro').load("foro");
	$('#foro').css('display','block');
	$('#agenda').css('display','none');
	$('#tareas').css('display','none');
	$('#notas').css('display','none');
	$('#asistencia').css('display','none');
}
function cargar_agenda(){
	$('#agenda').load("agenda");
	$('#foro').css('display','none');
	$('#agenda').css('display','block');
	$('#tareas').css('display','none');
	$('#notas').css('display','none');
	$('#asistencia').css('display','none');
}
function cargar_tareas(){
	$('#tareas').load("tareas");
	$('#foro').css('display','none');
	$('#agenda').css('display','none');
	$('#tareas').css('display','block');
	$('#notas').css('display','none');
	$('#asistencia').css('display','none');
}
function cargar_notas(){
	$('#notas').load("notas");
	$('#foro').css('display','none');
	$('#agenda').css('display','none');
	$('#tareas').css('display','none');
	$('#notas').css('display','block');
	$('#asistencia').css('display','none');
}
function cargar_asistencia(){
	$('#asistencia').load("asistencia");
	$('#foro').css('display','none');
	$('#agenda').css('display','none');
	$('#tareas').css('display','none');
	$('#notas').css('display','none');
	$('#asistencia').css('display','block');
}