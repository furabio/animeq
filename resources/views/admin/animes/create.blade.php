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
                    <div class="panel-heading">Novos animes:</div>
                    <div class="panel-body">
                        {!! Form::open(['route' => 'animes.store', 'method' => 'post', 'files' => true]) !!}

                            {{ Form::label('name', 'Nome: ') }}
                            {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Anime...', 'autofocus' => 'true']) }}

                            {{ Form::label('sinopse', 'Descrição: ') }}
                            {{ Form::textarea('sinopse', null, ['class' => 'form-control', 'placeholder' => 'Sinopse do anime ...']) }}

                            {{ Form::label('genre', 'Gênero: ') }}
                            {{ Form::text('genre', null, ['class' => 'form-control', 'placeholder' => 'Ação , Fantasia, Superpoder, etc...']) }}

                            {{ Form::label('director', 'Diretor/Direção: ') }}
                            {{ Form::text('director', null, ['class' => 'form-control', 'placeholder' => 'Tomohisa Taguchi...']) }}

                            {{ Form::label('studio', 'Estúdio: ') }}
                            {{ Form::text('studio', null, ['class' => 'form-control', 'placeholder' => 'Studio Pierrot...']) }}

                            {{ Form::label('release', 'Dia de lançamento: ') }}
                            {{ Form::select('release',
                                        [   '1' => 'Domingo',
                                            '2' => 'Segunda-Feira',
                                            '3' => 'Terça-Feira',
                                            '4' => 'Quarta-Feira',
                                            '5' => 'Quinta-Feira',
                                            '6' => 'Sexta-Feira',
                                            '7' => 'Sábado'
                                        ]
                                        ,null, ['class' => 'form-control', 'placeholder' => 'Dia da semana']) }}

                            {{ Form::label('year', 'Ano: ') }}
                            {{ Form::number('year', null, ['class' => 'form-control', 'placeholder' => '2016 ...']) }}

                            {{ Form::label('status', 'Status: ') }}
                            {{ Form::select('status', ['2' => 'Em lançamento', '1' => 'Completo'], null, ['class' => 'form-control', 'placeholder' => 'Status do anime...']) }}

                            {{ Form::label('image', 'Capa: ') }}
                            {{ Form::file('image'), null, ['class' => 'form-control']}}

                            {{ Form::submit('Criar', ['class' => 'btn btn-success btn-block', 'style' => 'margin-top: 10px;']) }}

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection