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
            
            @foreach($users as $u)
                <li class="ui-widget-content ui-corner-tr" id={{$u->student_id}}><img src={{URL::to('img/friend.png')}} alt="">{{$u->names}} {{$u->last_name1}} {{$u->last_name2}}</li>
            @endforeach
            <li class="ui-widget-content ui-corner-tr" id="4"><img src={{URL::to('img/friend.png')}} alt="">luis</li>
        </ul>
    </div>
    <a href="javascript:guardargrupos();" class="btn btn-info">Guardar</a>
</div>
@endsection