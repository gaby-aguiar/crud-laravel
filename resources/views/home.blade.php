@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8" style="text-align: center">
            <div class="card">
                <div class="card-header">{{ __('Home') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a class="btn btn-primary" href="{{ url('livro/create') }}" role="button">Cadastrar</a>
                    <a class="btn btn-primary" href="{{ url('livro') }}" role="button">Lista de Livros</a>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
