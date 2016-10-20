@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                @include('errors.success')
                <div class="panel panel-default">
                    <div class="panel-heading">Animes</div>
                    <div class="panel-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nome</th>
                                    <th>Categoria</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($animes as $anime)
                                <tr>
                                    <td>{{ $anime->id }}</td>
                                    <td>{{ $anime->name }}</td>
                                    <td>{{ $anime->category->name }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection