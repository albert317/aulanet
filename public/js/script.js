function NuevaTarea()
{
	$("#tareas").css("display","none");
	$("#newtask").css("display","block");
	var cadena="";
	console.log("hola");
}
function CancelarCrearTarea()
{
	$("#tareas").css("display","block");
	$("#newtask").css("display","none");
}
$(function() {
	$( "#accordion" ).accordion({
		heightStyle: "content"
	});
});