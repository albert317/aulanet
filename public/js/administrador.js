var mostrar_curso = function () {
    var html = "<select name='cursos' id='cursos'>";
    var href = $(location).attr('href')+"/obtenerCurso";
    var val_ciclo = $("#ciclos").val();

    $.ajax({ 
        url: href,
        type: "POST", 
        data: {ciclo:val_ciclo},
        dataType: "json",
        success: function(data) { 
            $.each(data,function(i, item) {
                 html += "<option value='"+data[i].attributes.course_id+"'>"+data[i].attributes.name+"</option>";
            });
            html +="</select>";
            $('#cursosCiclo').empty();
            $('#cursosCiclo').append(html);
        },
        error: function(e){ 
        alert("Error en el servidor, por favor, intentalo de nuevo mas tarde");
        }
    });

}
