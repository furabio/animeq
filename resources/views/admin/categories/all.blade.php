@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                @include('errors.success')
                <div class="panel panel-default">
                    <div class="panel-heading">Adicione uma nova categoria:</div>
                    <div class="panel-body">
                        @if(isset($categories) && !empty($categories))
                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Categoria</th>
                                        <th>Editar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($categories as $category)
                                        <tr>
                                            <td>{{ $category->id }}</td>
                                            <td>{{ $category->name }}</td>
                                            <td>
                                                {!! Form::open(['route' => ['categories.delete', $category->id], 'method' => 'delete']) !!}
                                                    {{ Form::submit('Deletar', ['class' => 'btn btn-danger']) }}
                                                {!! Form::close() !!}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection