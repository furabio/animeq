@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                @if($errors->any())
                    <div class="alert alert-danger" role="alert">
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="panel panel-default">
                    <div class="panel-heading">Adicione uma nova categoria:</div>
                    <div class="panel-body">
                        {!! Form::open(['route' => 'categories.store', 'method' => 'post']) !!}

                            {{ Form::label('name', 'Nome da categoria: ') }}
                            {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Legendados, Dublados, Filmes, etc ...']) }}

                            {{ Form::submit('Criar', ['class' => 'btn btn-success btn-block']) }}

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection