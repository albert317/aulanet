function NuevaTarea()
{
	$("#tareas").empty();
	$("#tareas").add("nuevatarea");
	console.log("hola");
}
$(function() {
	$( "#accordion" ).accordion({
		heightStyle: "content"
	});
});