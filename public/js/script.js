//Nueva tarea
function NuevaTarea()
{
	$("#tareas").css("display","none");
	$("#newtask").css("display","block");
}
function CancelarCrearTarea()
{
	$("#tareas").css("display","block");
	$("#newtask").css("display","none");
}

//login salir
$(function() {
	$( "#accordion" ).accordion({
		heightStyle: "content"
	});
});
/*
function NuevaAsistencia()
{
	$("#tabla tbody").appendTo("<td></td>");
}
*/

var grupo_alumnos=new Array();
for (j = 0; j < 2; j++){ 
    grupo_alumnos[j]=new Array(); 
}
var cant=1;
function guardargrupos()
{
    var ind=1,pos=0;
    for(var ij=0;ij<(i-1);ij++)
    {
        var grupo="#trash"+ind+ ">ul>li";
        $(grupo).each(function(indice, elemento) {
            grupo_alumnos[indice][0]=$(elemento).attr("id");
            grupo_alumnos[indice][1]=ij+1;
            pos++;
        });
        ind++;
    }
    var href = $(location).attr('href')+"/creargrupo";
    var contador=0,url=$(location).attr('href'),ruta;
    for(var ji=0;ji<url.length;ji++)
    {
        if(url.charAt(ji)=='/')
        {
            contador++;
        }
        if(contador==6)
        {
            ruta=url.substring(0,ji);
            contador=7;
        }
    }
    console.log("ruta"+ruta);
    $.ajax({ 
        type: "POST", 
        data: {grupo_alumnos:grupo_alumnos}, 
        url: href, 
        success: function(data) { 
            //alert("la tarea se asigno a los grupos")
            $(location).attr('href',ruta);
        },
        error: function(e){ 
        alert("Error en el servidor, por favor, intentalo de nuevo mas tarde");
        }
    });


/*
    var dato="jose";
    $.post(href,dato);*/
}

var i=1;//numero de grupo
function NuevoGrupo()
{
	var grupo="<div id='trash"+i+"' class='grupo'><b>Grupo "+i+"</b><div class='linea'></div></div>";
	$("#grupos").append(grupo);
	DroppDrag("trash"+i);
	i++;
}


//crear grupo
function DroppDrag(id) {
    // there's the gallery and the trash
    var $gallery = $( "#gallery" ),
    $id = $( "#"+id );

    // let the gallery items be draggable
    $( "li", $gallery ).draggable({
      cancel: "a.ui-icon", // clicking an icon won't initiate dragging
      revert: "invalid", // when not dropped, the item will revert back to its initial position
      containment: "document",
      helper: "clone",
      cursor: "move"
  });

    // let the trash be droppable, accepting the gallery items
    $id.droppable({
    	accept: "#gallery > li",
    	activeClass: "ui-state-highlight",
    	drop: function( event, ui ) {
    		deleteImage( ui.draggable );
    	}
    });

    // let the gallery be droppable as well, accepting items from the trash
    $gallery.droppable({
    	accept: "#"+id+" li",
    	activeClass: "custom-state-active",
    	drop: function( event, ui ) {
    		recycleImage( ui.draggable );
    	}
    });

    // image deletion function
    var recycle_icon = "<a href='' title='elimina del grupo' class='ui-icon ui-icon-refresh'>x</a>";
    function deleteImage( $item ) {
    	$item.fadeOut(function() {
    		var $list = $( "ul", $id ).length ?
    		$( "ul", $id ) :
    		$( "<ul id='grupo"+cant+"' class='gallery ui-helper-reset'/>" ).appendTo( $id );
            cant++;
    		$item.find( "a.ui-icon-trash" ).remove();
    		$item.append( recycle_icon ).appendTo( $list ).fadeIn(function() {
    			$item
    			.animate({ width: "200px" });
    		});
    	});
    }

    // image recycle function

    function recycleImage( $item ) {
    	$item.fadeOut(function() {
    		$item
    		.find( "a.ui-icon-refresh" )
    		.remove()
    		.end()
    		.find()
    		.end()
    		.appendTo( $gallery )
    		.fadeIn();
    	});
    }

    // image preview function, demonstrating the ui.dialog used as a modal window
    /*function viewLargerImage( $link ) {
      var src = $link.attr( "href" ),
        title = $link.siblings( "img" ).attr( "alt" ),
        $modal = $( "img[src$='" + src + "']" );
 
      if ( $modal.length ) {
        $modal.dialog( "open" );
      } else {
        var img = $( "<img alt='" + title + "' width='384' height='288' style='display: none; padding: 8px;' />" )
          .attr( "src", src ).appendTo( "body" );
        setTimeout(function() {
          img.dialog({
            title: title,
            width: 400,
            modal: true
          });
        }, 1 );
      }
    }
    */
    // resolve the icons behavior with event delegation
    $( "ul.gallery > li" ).click(function( event ) {
    	var $item = $( this ),$target = $( event.target );
    	if ( $target.is( "a.ui-icon-trash" ) ) {
    		deleteImage( $item );
    	} else if ( $target.is( "a.ui-icon-refresh" ) ) {
    		recycleImage( $item );
    	}

    	return false;
    });
}