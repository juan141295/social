@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Información de Carreras</div>
                <div class="panel-body">
                    <table class="table border">
                        <thead>
                            <th>ID</th>
                            <th>Carrera</th>
                            <th>Acciones</th>
                        </thead>
                        <body>
                        <tr>
                            <td>{{ $carrera->id }}</td>
                            <td>{{ $carrera->carrera }}</td>
                            <td><a href="{{ route('carrera.edit', $carrera->id) }}" class="btn btn-warning">Editar</a>
                            {!! Form::open(['route' => ['carrera.destroy', $carrera->id], 'method' => 'delete' ]) !!}

                            {!! Form::submit('Eliminar', ['class' => 'btn btn-danger']) !!}

                            {!! Form::close() !!}
                            </td>
                            
                        </tr>
                        </body>
                    </table>
                </div>
                <a href="{{ route('carrera.create') }}" class="btn btn-success">Nueva Carrera</a>
            </div>
        </div>
    </div>
</div>
@endsection
