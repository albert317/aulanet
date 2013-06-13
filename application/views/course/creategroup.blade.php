@layout('layout.master')
@section('logout')
<ul class="user nav nav-pills">
    <li class="dropdown">
        <a class="dropdown-toggle" id="drop4" role="button" data-toggle="dropdown" href="#"><i class="icon-user"></i>{{Auth::user()->names}}<b class="caret"></b></a>
        <ul id="menu1" class="dropdown-menu" role="menu" aria-labelledby="drop4">
            <li role="presentation"><a role="menuitem" tabindex="-1" href="login/logout">Salir</a></li>
        </ul>
    </li>
</ul>
@endsection
@section('content')
<div id="contenido">
    <ul class="nav nav-pills">
        <li class="active"><a href="">Tareas</a></li>
        <li><a href="">Agenda</a></li>
        <li><a href="">Asistencia</a></li>
        <li><a href="">Notas</a></li>
        <li><a href="">Foro</a></li>
    </ul>

    <div class="grupos" id="grupos">
        <h4>Grupos</h4>
        <a href="javascript:NuevoGrupo();"><img src={{URL::to('img/addgroup.png')}} alt="">Crear Grupo</a><br><br>
    </div>

    <div class="alumnos">
        <h4>Alumnos</h4>
        <ul id="gallery" class="gallery ui-helper-reset ui-helper-clearfix">
            <!--@for($i=0;$i<10;$i++)
            <li class="ui-widget-content ui-corner-tr">Alumno {{$i+1}} </li>
            @endfor-->
            <li class="ui-widget-content ui-corner-tr"><img src={{URL::to('img/friend.png')}} alt=""> Montes Anccasi Albert Juan</li>
            <li class="ui-widget-content ui-corner-tr"><img src={{URL::to('img/friend.png')}} alt=""> Muñoz Sagarvinaga Leonidas</li>
            <li class="ui-widget-content ui-corner-tr"><img src={{URL::to('img/friend.png')}} alt=""> Natividad Alejos Luis Felipe</li>
            <li class="ui-widget-content ui-corner-tr"><img src={{URL::to('img/friend.png')}} alt=""> Odicio Vilchez Joan Axel</li>
            <li class="ui-widget-content ui-corner-tr"><img src={{URL::to('img/friend.png')}} alt=""> Rojas Ayala Myleni Beatriz</li>
            <li class="ui-widget-content ui-corner-tr"><img src={{URL::to('img/friend.png')}} alt=""> Tanaka Terukina Ricardo</li>
            <li class="ui-widget-content ui-corner-tr"><img src={{URL::to('img/friend.png')}} alt=""> Tarrillo Celada Cesar Alfredo</li>
            <li class="ui-widget-content ui-corner-tr"><img src={{URL::to('img/friend.png')}} alt=""> Velásquez Hinostroza Katherine Luisa</li>
        </ul>
    </div>
</div>
@endsection