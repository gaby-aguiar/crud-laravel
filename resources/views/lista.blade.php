@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header" style="text-align: center">{{ __('Lista de Livros') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nome</th>
                                    <th scope="col">Autor</th>
                                    <th scope="col">Editar</th>
                                    <th scope="col">Deletar</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($livros as $livro)
                                <tr>
                                    <th scope="row">{{$livro->id}}</th>
                                    <td>{{$livro->nome}}</td>
                                    <td>{{$livro->autor}}</td>
                                    <td>
                                        <a href="livro/{{$livro->id}}/edit" class="btn btn-success">Editar</a>
                                    </td>
                                    <td>
                                        <form action="livro/delete/{{ $livro->id }}" method="post">
                                            @csrf
                                            @method('delete')
                                            <button class="btn btn-danger">Deletar</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach

                                </tbody>
                            </table>
                            <a class="btn btn-primary" href="{{ url('home') }}" role="button">Voltar</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
