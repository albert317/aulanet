function cargar(item){
	$('#contenido').empty();
	$('#contenido').load(item);
}
$(function() {
	$( "#accordion" ).accordion({
		heightStyle: "content"
	});
});