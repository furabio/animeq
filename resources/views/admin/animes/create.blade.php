@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
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
                            {{ Form::text('release', null, ['class' => 'form-control', 'placeholder' => 'Sexta-Feira, Quarta-Feira, etc ...']) }}

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