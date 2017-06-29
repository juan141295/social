@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Listado de Usuarios</div>

                <div class="panel-body">
                    <table class="table border">
                        <thead>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Código</th>                                                                                    
                            <th>Correo</th>
                            <th>Carrera</th>                            
                            <th>Rol</th>                            
                        </thead>
                        <body>    
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->nombre }}</td>
                            <td>{{ $user->codigo }}</td>
                            <td>{{ $user->correo }}</td>
                            <td>{{ $user->carrera->carrera }}</td>
                            <td>{{ $user->rol }}</td>
                        </tr>
                        <tr>
                            <td colspan="6">Programa: {{ $user->programas()->first() !== null ? $user->programas()->first()->nombre : "No asignado" }}</td>
                        </tr>
                        </body>
                    </table>
            </div>
        </div>
        <div class="row">
        <div class="col-md-8 col-md-offset">
        <h3>Asociar con programa</h3>
            {!! Form::open(['action'=>'AdminUsuarioController@asociarPrograma']) !!}
            {!! Form::label('programa_id', 'Seleccione el programa', ['class' => '']) !!}
            {!! Form::select('programa_id',$programas,null,['class' => 'form-control']) !!}
            {!! Form::hidden('user_id',$user->id) !!}
            {!! Form::submit('Aceptar',['class'=>'btn btn-success']) !!}
            {!! Form::close() !!}
        </div>
        </div>
    </div>
</div>
@endsection
